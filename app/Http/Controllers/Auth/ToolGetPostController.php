<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Posts;
use Illuminate\Support\Facades\Storage;
use Sunra\PhpSimple\HtmlDomParser;

class ToolGetPostController extends Controller
{

    public function indexAction()
    {
        return view('admin/tool/index');
    }
    public function indexPostAction(\Illuminate\Http\Request $request)
    {
        $submit = $request->input('submit');
        $source = $request->input('source');
        if ($submit == "Submit"){
            $arr = $this->getLinkByRss("https://vnexpress.net/rss/the-thao.rss");
            $data = $this->getHtmlByUrl($arr);
            foreach ($data as $value){
                $value['alias'] = $value['name'];
                $value['category_id'] = 7;
                $value['source_id'] = (int)$source;
                $value['status'] = 0;
                $value['count_see'] = 0;
                $value['keyword'] = $value['name'];
                $value['description'] = $value['name'];

                $posts = new Posts();
                $posts->addPost($value);
            }


        }
        else
            return redirect('/admin/tool/index');
    }

    public function getLinkByRss(String $url){
        $arrLinks = [];

        $dom = file_get_contents($url);
        $xml = simplexml_load_string($dom) or die("Error: Cannot create object");
        foreach ($xml->channel->item as $value){
            $_url = $value->link->saveXML();
            $_url = str_replace('<link>','',$_url);
            $_url = str_replace('</link>','',$_url);
            if (!empty($_url))
                array_push($arrLinks,$_url);
        }
        return $arrLinks;
    }

    public function getHtmlByUrl($links){
        $arrContents = [];
        foreach ($links as $link){
            $ch = curl_init($link);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);// Khi thực thi lệnh sẽ k view ra trình duyệt mà lưu lại vào 1 biến kiểu string
            $content = curl_exec($ch);
            curl_close($ch);
            $dom = HtmlDomParser::str_get_html($content);
            $arrContent = [];
            foreach ($dom->find('h1.title_news_detail') as $d) {
                $arrContent['name'] = $d->innertext;
            }
            foreach ($dom->find('article.content_detail') as $d) {
                $arrContent['content'] = $d->innertext;
            }
            if (!empty($arrContent))
                array_push($arrContents,$arrContent);
        }
        return $arrContents;
    }
}
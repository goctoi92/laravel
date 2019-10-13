import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import "../../../public/css/application/index.css";

export default class Item_News extends Component {
    render() {
        let indents = [];
        let _temp = 3;
        let _tempPlus = 3;
        let _col = 4;
        let arrColor = [
            ["#ffffff","#3f4d2f"],
            ["#ffffff","#29282f"],
            ["#ffffff","#4c5b5a"],
            ["#000000","#c6947e"],
            ["#000000","#f2f2f2"],
            ["#000000","#d6c658"],
        ];
        for (let i = 0; i < 50; i++) {
            let random = Math.floor(Math.random() * 6);
            if (i === _temp)
                _col = 8;
            indents.push(
                <div key={i} className={"box-items col-md-"+_col}>
                    <div data-col={_col} className="card feed-item ">
                        <a href="#" title="Cây ngọc ngân tác dụng">
                            <div className="img-news card-img-top">
                                <img className="img-fluid" src={"/images/application/smart_crop_516x290.webp"}/>
                            </div>
                            <div data-color={arrColor[random][1]} className="shade-mask"></div>
                            <div data-color={arrColor[random][0]} className="doc-info card-body">
                                <p className="title-news card-title">Cây ngọc ngân tác dụng và ý nghĩa tiền bạc rủng
                                    rỉnh</p>
                                <p className="sort-desc card-text">Cây ngọc ngân lá xanh mượt, phát triển nhanh lại ít sâu
                                    bệnh là một trong những
                                    loại cây cảnh dễ trồng để trong nhà, để bàn làm việc, trang trí nội thất, cây văn
                                    phòng</p>
                                <div className="section-option">
                                    <p className="source_title">EVA</p>
                                    <span>2100<i className="fa fa-eye"></i></span>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            );
            if (_col === 8){
                _col = 4;
                if (_tempPlus === 3){
                    _temp += _tempPlus;
                    _tempPlus = 4;
                }
                else{
                    _temp += _tempPlus;
                    _tempPlus = 3;
                }
            }
        }
        return (
            <div className="row">
                {indents}
            </div>
        );
    }
}

if (document.getElementById('main-content')) {
    ReactDOM.render(<Item_News />, document.getElementById('main-content'));
}

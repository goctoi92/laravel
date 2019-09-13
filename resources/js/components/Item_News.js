import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import "../../../public/css/application/index.css"

export default class Item_News extends Component {
    render() {
        var indents = [];
        for (var i = 0; i < 50; i++) {
            indents.push(
                <div className="col-md-4 card feed-item" key={i}>
                    <div className="img-news card-img-top"></div>
                    <div className="doc-info card-body">
                        <div className="shade-mask"></div>
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
                </div>
            );
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

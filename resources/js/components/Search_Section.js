import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Search_Section extends Component{
    render(){
        return (
            <div className="col-md-12">
                <div className="input-group mb-2">
                    <input type="text" className="form-control" id="txt-search" placeholder="Tìm bài viết!"/>
                        <div className="input-group-prepend">
                            <div className="input-group-text">
                                <i className="fa fa-search"></i>
                            </div>
                        </div>
                </div>
            </div>
        );
    }
}
if(document.getElementById('section-search')){
    ReactDOM.render(<Search_Section/>,document.getElementById('section-search'));
}

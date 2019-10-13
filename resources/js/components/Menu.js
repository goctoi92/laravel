import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class Menu extends Component{
    constructor(){
        super();
        this.state = {
            category: []
        }
    }
    componentWillMount(){
        axios.get('/api/category').then(response =>{
            this.setState({
                category: response.data,
            })
        })
    }
    render(){
        return (
            <nav className="navbar navbar-expand-lg navbar-light bg-white">
                <a title="Bóng đá 365" className="navbar-brand" href="/">
                    <img className="img-fluid img-logo" src={"/images/application/my-logo-365.png"} alt="Bóng đá 365"/>
                </a>
                <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNews"
                        aria-controls="navbarNews" aria-expanded="false" aria-label="Toggle navigation">
                    <span className="navbar-toggler-icon"></span>
                </button>
                <div className="collapse navbar-collapse" id="navbarNews">
                    <ul className="navbar-nav">
                        {this.state.category.map((cate,i)=>{
                            let url = "/bong-da/" + cate.alias;
                            return (
                                <li key={i} className="nav-item">
                                    <a title={cate.name} className="nav-link" href={ url }>{cate.name}</a>
                                </li>
                            );

                        })}
                        {/*<li className="nav-item dropdown">*/}
                            {/*<a className="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"*/}
                               {/*data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/}
                                {/*Dropdown link <i className="fa fa-angle-down"></i>*/}
                            {/*</a>*/}
                            {/*<ul className="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">*/}
                                {/*<li><a className="dropdown-item" href="#">Action</a></li>*/}
                                {/*<li><a className="dropdown-item" href="#">Another action</a></li>*/}
                                {/*<li><a className="dropdown-item" href="#">Something else here</a></li>*/}
                            {/*</ul>*/}
                        {/*</li>*/}
                    </ul>
                    <div className="input-group table-wrapper position-relative menu-right">
                        <div className="input-group">
                            <input type="text" className="form-control" id="inlineFormInputGroup"
                                   placeholder="Tìm kiếm"/>
                            <div className="input-group-prepend">
                                <div className="input-group-text"><i className="fa fa-search"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        );
    }
}
if(document.getElementById('section-menu')){
    ReactDOM.render(<Menu/>,document.getElementById('section-menu'));
}
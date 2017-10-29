import React from "react";
import ArticlesList from "./ArticlesList";
import $ from "jquery";


const SearchForm = React.createClass({


    getInitialState() {
        return {
            recipes: [],
            is_search: false
        };
    },

    search(e) {
        e.preventDefault();
        const self = this;
        var input = this.refs.text.value;
        var url = "http://food2fork.com/api/search?key=a44d6f379e70d83a34534d107e7e8875";
        url += "&q=" + input;

        $.ajax({
            url: url,
            type: "GET",
            success: function (resultData) {
                self.setState({recipes: JSON.parse(resultData).recipes, is_search: true});
            }.bind(this),
            error: function (jqXHR, textStatus, errorThrown) {
                alert('error');
            },

            timeout: 120000,
        });

    },

    componentWillMount()
    {
        if (!this.state.is_search)
        {
            const self = this;
            var randNumber = Math.round(Math.random()*10)+1;
            var url = "http://food2fork.com/api/search?key=a44d6f379e70d83a34534d107e7e8875&page="+randNumber;
            $.ajax({
                url: url,
                type: "GET",
                success: function (resultData) {
                    self.setState({recipes: JSON.parse(resultData).recipes});
                }.bind(this),
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('error');
                },
                timeout: 120000,
            });
        }

    }
    ,
    render() {
        const data = this.state.recipes;
        return (
            <div>
                <form  className="search" onSubmit={this.search}>
                    <div className="input-group search">
                         <input type="text" className="form-control" placeholder="Ingredient, recipe ..." ref="text"/>
                          <span className="input-group-btn">
                            <button className="btn btn-default">Go!</button>
                          </span>
                    </div>
                </form>
                {data.length ? <ArticlesList articles={data}/> : this.state.is_search ? <h3 className="main-title">No result</h3> : ""}
            </div>
    );
    }
    });
    export default SearchForm;
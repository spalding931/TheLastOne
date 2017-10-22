import React from 'react';
import ArticlesList from "./ArticlesList";
import $ from "jquery";


const SearchForm = React.createClass({


    getInitialState() {
        return {
            recipes: [],
        };
    },

    search(e) {
        e.preventDefault();
        const self = this;

        var input = this.refs.text.value;
        $.ajax({
            url: "http://food2fork.com/api/search?key=a44d6f379e70d83a34534d107e7e8875&q="+input,
            type: "GET",
            contentType: 'application/json; charset=utf-8',
            success: function (resultData) {
                self.setState({recipes:JSON.parse(resultData).recipes});
            }.bind(this),
            error: function (jqXHR, textStatus, errorThrown) {
                alert('error');
            },

            timeout: 120000,
        });
        this.refs.text.value = '';
    },

    render() {
        const data = this.state.recipes;
        return (
            <div>
                <form  onSubmit={this.search}>
                    <input placeholder="Search something…" ref="text"/>
                    <button >Search</button>
                </form>
                <ArticlesList articles={data}/>

            </div>
        );
    }
});
export default SearchForm;

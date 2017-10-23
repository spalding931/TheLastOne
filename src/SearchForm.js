import React from 'react';
import ArticlesList from "./ArticlesList";
import $ from "jquery";


const SearchForm = React.createClass({


    getInitialState() {
        return {
            recipes: [],
            is_search:false
        };
    },

    search(e) {
        e.preventDefault();
        const self = this;
        var input = this.refs.text.value;
        $.ajax({
            url: "https://food2fork.com/api/search?key=a44d6f379e70d83a34534d107e7e8875&q="+input,
            type: "GET",
            contentType: 'application/json; charset=utf-8',
            success: function (resultData) {
                self.setState({recipes:JSON.parse(resultData).recipes,is_search:true});
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

                {data.length ? <ArticlesList articles={data}/> : this.state.is_search ? "NO result":""}

            </div>
        );
    }
});
export default SearchForm;

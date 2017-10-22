import React, {PropTypes} from "react";

const ArticlesList = React.createClass({

    propTypes: {
        articles: PropTypes.array.isRequired,
    },

    getDefaultProps() {
        return {
            articles: [],
        };
    },

    render() {
        return (
            <div>
                {
                    this.props.articles.map((article, index) =>
                        <div className="blog-card" key={index}>
                            <img className="photo" src={article.image_url}></img>
                            <ul className="details">
                                <li className="author">{article.publisher}</li>
                            </ul>
                            <div className="description">
                                <h1>{article.title}</h1>
                                <h2>Opening a door to the future</h2>
                                <a href={"#"+article.recipe_id}>Read More</a>
                            </div>
                        </div>
                    )
                }
            </div>
        );
    }
});
export default ArticlesList;

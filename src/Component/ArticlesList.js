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
                        < div className="recipe card" key={index}>
                            <a href={"#"+article.recipe_id}>
                                <div className="wrapper" style={{background: `url(${article.image_url}) center/cover no-repeat`}} >
                                    <div className="data">
                                        <div className="content">
                                            <span className="author">{article.publisher}</span>
                                            <h1 className="">{article.title}</h1>
                                            <p className="text">The antsy bingers of Netflix will eagerly anticipate the digital
                                                release of the Survive soundtrack, out today.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    )
                }
            </div>
        );
    }
});
export default ArticlesList;



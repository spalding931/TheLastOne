import React from "react";
import ReactDOM from "react-dom";
import AppChat from "./Component/AppChat";
import SearchForm from "./Component/SearchForm";
import Log from  "./Component/Log";
import "./Style/index.css";
import "bootstrap/dist/css/bootstrap.css";
import "jquery";

ReactDOM.render(
    <SearchForm />,
    document.getElementById('articles')
);

ReactDOM.render(
    <AppChat />,
    document.getElementById('chat')
);

ReactDOM.render(<Log />,document.getElementById('log'));

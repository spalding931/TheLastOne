import React from "react";
import ReactDOM from "react-dom";
import AppChat from "./AppChat";
import SearchForm from "./SearchForm";
import "./index.css";
import "./App.css"

ReactDOM.render(
    <SearchForm />,
    document.getElementById('articles')
);

ReactDOM.render(
    <AppChat />,
    document.getElementById('chat')
);


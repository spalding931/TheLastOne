import React from "react";

const SignOut = React.createClass({

    signOut() {
        firebase.auth().signOut().then(function () {
            document.getElementById("chat").style.visibility = "hidden";
            this.props.callback();
        }).catch(function (error) {
        });
    },
    render() {
        return <button className="btn btn-default" onClick={this.signOut}>Sign Out</button>;
    }
});
export default SignOut;

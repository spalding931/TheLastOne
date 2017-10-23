import React from "react";


const SignOut = React.createClass({

    signOut() {
        firebase.auth().signOut().then(function () {
        }).catch(function (error) {
            // An error happened.
        });
    },
    render() {
        return <button className="btn-default" onClick={this.signOut}>Sign Out</button>;
    }
});
export default SignOut;

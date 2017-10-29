import React from "react";


class SignOut extends React.Component{

    constructor(props) {
        super(props);
    }

    signOut() {
        firebase.auth().signOut().then(function () {

        }).catch(function (error) {
            // An error happened.
            alert(error);
        });
    }
    render() {
        return <button className="btn-default" onClick={this.signOut}>Sign Out</button>;
    }
}
export default SignOut;

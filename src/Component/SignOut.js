import React from "react";


class SignOut extends React.Component{

    constructor(props) {
        super(props);
    }

    signOut() {
        firebase.auth().signOut().then(function () {
            
        }).catch(function (error) {
        });
    }
    render() {
        return <button className="btn btn-default" onClick={this.signOut}>Sign Out</button>;
    }
}
export default SignOut;

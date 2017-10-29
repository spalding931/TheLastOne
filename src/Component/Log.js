/**
 * Created by bouthoukinea on 29/10/2017.
 */
import React from 'react';
import SignIn from './SignIn';
import SignOut from './SignOut';


const Log = React.createClass({

    user:null,
    componentWillMount()
    {
        var self = this;
        firebase.auth().onAuthStateChanged((authData) => {
            if (authData) {
                self.setState({user: authData});
            }
        });
    }
    ,
    render() {
        return user ? (<SignOut />):(<SignIn/>);
    }
});
export default Log;

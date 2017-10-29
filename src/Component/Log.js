/**
 * Created by bouthoukinea on 29/10/2017.
 */
import React from 'react';
import SignIn from './SignIn';
import SignOut from './SignOut';


const Log = React.createClass({



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
    callback()
    {
        this.setState({user:null});
    }
    ,
    render() {
        return user ? (<SignOut callback={this.callback} />):(<SignIn />);
    }
});
export default Log;

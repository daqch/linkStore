import React from 'react';
import ReactDOM from 'react-dom';

function DeleteButton(props) {
    return (
        <div>
        </div>
    );
}

export default DeleteButton;

if (document.getElementById('deletebutton')) {
    ReactDOM.render(<DeleteButton />, document.getElementById('deletebutton'));
}

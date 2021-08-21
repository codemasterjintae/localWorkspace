import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import FetchDetails from './Api.jsx';
class Main extends React.Component {
  
  render() { 
    return ( 
      <div>
          <FetchDetails />
          Hello
      </div>
     );
  }
}
 
ReactDOM.render(<Main/> ,document.getElementById('root'));


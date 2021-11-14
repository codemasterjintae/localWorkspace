import React, { useState, useEffect } from 'react';
import './style.css';
import { AddNotes,SetNotes} from './Action';
import {SaveNotes, LoadNotes} from "./Reducer";
import { connect } from 'react-redux';
import * as actionCreator from './actions/actions';
function App(props) {
  const { dispatch, notes } = props;
  const [data, setData] = useState([]);

  const handleEvent = e => {
    setData(e.target.value);
    // console.log('App', e.target.value);
  };
  const handleAdd = () => {
    dispatch(AddNotes(data));
    setData('')
  }
const onSave = () => {
  dispatch(SaveNotes());
} 
const onLoad = () => {
  dispatch(LoadNotes());
}

return (
    <div>
      <input type="text" name="note" onChange={handleEvent} value={data}/>
      <button onClick={handleAdd}>Add Note</button>
      <div><ul>{notes != undefined ? notes.map(value => <li key={value}>{value}</li>) : ''}</ul></div>
      <button onClick={onSave}>Save</button>
      <button onClick={onLoad}>Load</button>

    </div>
  );
}

const mapStateToProps = state => {
  return {
    notes: state && state.notes
  };
};

const mapDispatchToProps = dispatch => {
  return {
    dispatch
  };
};

export default connect(
  mapStateToProps,
  mapDispatchToProps
)(App);

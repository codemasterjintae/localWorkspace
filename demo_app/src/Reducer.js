import { AddNotes, SetNotes } from './Action';

const initialState = {
  notes: []
};

const NoteReducer = (state = initialState, action) => {
  // console.log("reducer" ,action.value,state.notes)
  switch (action.type) {
    case 'AddNote':
      const Notes = state.notes;
      return {
        notes: [...state.notes, action.value]
      };
    case 'SetNotes':
      return {
        ...state,
        notes: action.payload
      };
    default:
      return state;
  }
};

export const SaveNotes = () => async (dispatch, getState) => {
  const notes = getState().notes;
  // console.log(notes);
  await fetch('http://localhost:3000/notes', {
    method: 'POST',
    headers: {
      Accept: 'application/json',
      'Content-type': 'application/json'
    },
    body: JSON.stringify(notes)
  });
  alert('Success');
};

export const LoadNotes = () => async (dispatch, getState) => {
  const notes = await fetch(
    'http://localhost:3000/notes',{method : 'GET'}
  )
  // console.log("Hello", notes)
    .then(response => response.json())
    .then(response => {
      console.log(response);
    })
    .catch(error => { console.log(error)});
  dispatch(SetNotes(notes));
};
export default NoteReducer;

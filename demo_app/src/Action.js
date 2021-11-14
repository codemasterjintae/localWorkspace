const AddNote = 'AddNote';
const SET_NOTES = 'SetNotes';
export function AddNotes(val){
  return{
    type : AddNote,
    value : val
  }
}

export function SetNotes(notes){
  return{
    type : SET_NOTES,
    payload : notes
  }
}

export function LoadNotes(notes){
  return{
    type : SET_NOTES,
    payload : notes
  }
}
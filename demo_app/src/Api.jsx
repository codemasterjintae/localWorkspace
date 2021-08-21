import React,{useState,useEffect} from 'render';
import ReactDOM from 'react-dom'


var ApiURL = "https://dummy.restapiexample.com/api/v1/employees";

function FetchDetails(){
    const [userdata,setUserData] = useState([]);
    useEffect(() => {
    async function fetchdata(){
        fetch(ApiURL,{"method" : "GET"})
        .then(response => response.json())
            .then(
                (response) => {
           console.log(response);

        },
        (error) => {
            console.log(error);
        });
}
    fetchdata();
},[]);
    return(
        <div>
            Hello
        </div>
    )
}
export default FetchDetails;

// fetch(url).then((response) => response.json())
//           .then(function(data) { /* do stuff with your JSON data */})
//           .catch((error) => console.log(error));
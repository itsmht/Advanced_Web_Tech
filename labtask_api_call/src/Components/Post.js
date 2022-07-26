import {useState} from 'react';
import axios from 'axios';
import DeptComp from './DeptComp';
import StudentComp from './StudentComp';
const Post=()=>{
    const[stud,setStudentComp]=useState({});
    const[department,setDept]=useState({});
    const LoadData=()=>{
        axios.get("https://mocki.io/v1/72353acd-8db8-4293-9df4-2e6c22920b55").then((rsp)=>{
            setStudentComp(rsp.data.Students[0]);
            setDept({
                Id:rsp.data.Id,
                Name:rsp.data.Name
            });
        },(err)=>{
            debugger;
        });
        

    }
    return(
        <div>
            <button onClick={LoadData}>Load Data</button>
            <DeptComp Id={department.Id} name={department.Name}></DeptComp>
            <StudentComp Id={stud.Id} name={stud.Name} dob={stud.Dob} cgpa={stud.Cgpa}></StudentComp>
        </div>

    )
}
export default Post;
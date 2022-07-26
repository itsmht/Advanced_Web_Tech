const StudentComp = (props) => {
    return (
        <div>
            <h1>Student</h1>
            <h2>{props.Id}</h2>
            <h2>{props.name}</h2>
            <h2>{props.dob}</h2>
            <h2>{props.cgpa}</h2>
        </div>
    )
}
export default StudentComp;
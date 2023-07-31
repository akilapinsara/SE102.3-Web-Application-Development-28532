*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    padding: 0 10px;
}
.container{
    border: 2px solid black;
    max-width: 500px;
    width: 100%;
    margin: 20px auto;
    padding: 30px;
    box-shadow: 2px 2px 2px rgba(0,0,0, 0.125);
}

.container .title{
    font-size: 38px;
    font-weight: bolder;
    margin-bottom: 25px;
    text-align: center;
}

.container .form{
    width: 100%;
    background-color: rgb(194, 194, 250);
}

.container .form .input_field {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}

.container .form .input_field label {
   width: 200px;
   margin-right: 10px;
   font-size: 24px;
}

.container .form .input_field .input{
    outline: none;
    font-size: 14px;
    padding: 8px 15px;
}

.container .form .input_field .selectbox{
    height: 35px;
    width: 100px;
    font-size: 14px;
}

.container .form .input_field .input:focus{
    border: 2px solid black;
}

.btn{
    height: 35px;
    width: 100px;
    font-size: 14px;
}

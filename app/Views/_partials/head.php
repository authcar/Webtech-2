<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?= isset($meta['title']) ? $meta['title'] : 'beritakoding.com' ?>

<style>

    
body{
    font-family: 'Segoe UI', Tahoma, sans-serif;
    background: linear-gradient(to right,#ffd1dc,#fff);
    margin:0;
}
nav{
    background:#ff6fa5;
    padding:15px;
    text-align:center;
}

nav a{
    color:white;
    text-decoration:none;
    margin:0 15px;
    font-weight:bold;
}

.container{
    width:650px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:12px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

h1, p{
    text-align:center;
    color:#ff4f8b;
}

table{
        width:100%;
        margin-top:20px;
        border-collapse: collapse;
}
td{
        padding:10px;
        border-bottom:1px solid #eee;
}
td:first-child{
        font-weight:bold;
        width:40%;
        color:#555;
    }


form{
    margin-top:20px;
}


label{
    font-weight:bold;
    color:#555;
}

input[type="text"],
input[type="email"],
textarea{
    width:100%;
    padding:10px;
    margin-top:6px;
    margin-bottom:15px;
    border:1px solid #ddd;
    border-radius:8px;
    font-size:14px;
}

input[type="text"]:focus,
input[type="email"]:focus,
textarea:focus{
    outline:none;
    border-color:#ff6fa5;
    box-shadow:0 0 5px rgba(255,111,165,0.5);
}

input[type="submit"],
input[type="reset"]{
    padding:10px 20px;
    border:none;
    border-radius:8px;
    font-weight:bold;
    cursor:pointer;
    margin-right:10px;
}

input[type="submit"]{
    background:#ff6fa5;
    color:white;
}

input[type="reset"]{
    background:#ccc;
}

input[type="submit"]:hover{
    background:#ff4f8b;
}

input[type="reset"]:hover{
    background:#aaa;
}

.container{
    width:650px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:12px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

h1, p{
    text-align:center;
    color:#ff4f8b;
}

</style>
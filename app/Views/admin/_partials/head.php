<style>
body {
    margin: 0;
    padding: 0;
}

.main {
    display: flex;
}

.side-nav {
    background: teal;
    width: 25vw;
    max-width: 200px;
    height: 100vh;
}

.side-nav .brand {
    padding: 0 1rem;
    color: white;
}

.side-nav nav {
    display: flex;
    flex-direction: column;
}

.side-nav nav a {
    font-family: sans-serif;
    text-decoration: none;
    color: white;
    padding: 0.8rem;
    border: 1px solid grey;
    border-left: none;
    border-right: none;
}

.side-nav nav a:hover {
    background-color: rgba(0, 0, 0, 0.2);
}

.content {
    padding: 1rem;
    width: 100%;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.button {
    background-color: #e7e7e7;
    border-radius: 8px;
    padding: 8px 16px;
}

.button:hover {
    opacity: 0.8;
}

.button-success {
    background-color: #4caf50;
    color: white;
}

.button-primary {
    background-color: #008cba;
    color: white;
}

.button-danger {
    background-color: #f44336;
    color: white;
}
</style>
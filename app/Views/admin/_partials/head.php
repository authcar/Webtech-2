<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Segoe UI', Tahoma, sans-serif;
    background: #f5f5f5;
}

.main {
    display: flex;
    min-height: 100vh;
}

/* === SIDEBAR === */
.side-nav {
    background: teal;
    width: 200px;
    flex-shrink: 0;
}

.side-nav .brand {
    padding: 1rem;
    color: white;
    font-size: 16px;
    font-weight: bold;
}

.side-nav nav {
    display: flex;
    flex-direction: column;
}

.side-nav nav a {
    color: white;
    text-decoration: none;
    padding: 12px 1rem;
    font-size: 14px;
    border-top: 1px solid rgba(255,255,255,0.15);
}

.side-nav nav a:hover {
    background: rgba(0,0,0,0.15);
}

/* === CONTENT === */
.content {
    flex: 1;
    padding: 2rem;
    background: white;
}

.content h1 {
    font-size: 22px;
    font-weight: bold;
    color: #333;
    margin-bottom: 1.25rem;
}

/* === TOOLBAR === */
.toolbar {
    margin-bottom: 1rem;
}

/* === BUTTONS === */
.button {
    display: inline-block;
    padding: 8px 16px;
    border-radius: 6px;
    border: 1px solid #ccc;
    background: #f5f5f5;
    color: #333;
    text-decoration: none;
    font-size: 13px;
    cursor: pointer;
}

.button:hover {
    background: #e9e9e9;
}

.button-primary {
    background: teal;
    color: white;
    border-color: teal;
}

.button-primary:hover {
    background: #00696969;
}

.button-danger {
    background: #e74c3c;
    color: white;
    border-color: #e74c3c;
}

.button-danger:hover {
    background: #c0392b;
}

.button-small {
    padding: 5px 12px;
    font-size: 12px;
}

/* === TABLE === */
.table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd;
    font-size: 14px;
}

.table th {
    background: #f9f9f9;
    padding: 10px 14px;
    text-align: left;
    font-size: 12px;
    font-weight: 600;
    color: #888;
    text-transform: uppercase;
    border-bottom: 1px solid #ddd;
}

.table td {
    padding: 12px 14px;
    border-bottom: 1px solid #ddd;
    color: #333;
    vertical-align: middle;
}

.table tr:last-child td {
    border-bottom: none;
}

.table tr:hover td {
    background: #fafafa;
}

.text-center {
    text-align: center;
}

.text-gray {
    color: #999;
}

.text-green {
    color: green;
}

/* === ACTION BUTTONS === */
.action {
    display: flex;
    gap: 6px;
    justify-content: center;
}

/* === FOOTER === */
.footer {
    margin-top: 2rem;
    font-size: 12px;
    color: #aaa;
}

</style>
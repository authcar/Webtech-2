<footer class="footer">
    &copy; <?= date('Y') ?> Beritakoding. All rights reserved.
</footer>
<style>
    html, body {
    height: 100%;
    margin: 0;
}

body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.main {
    display: flex;
    flex: 1;
}

.content {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.footer {
    margin-top: auto; /* ini yang dorong footer ke paling bawah */
    text-align: center;
    padding: 15px;
    font-size: 13px;
    color: #999;
}
</style>        
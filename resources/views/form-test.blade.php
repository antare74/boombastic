<html>
<head></head>
<body>
    <h1>FORM CONTACT</h1>
    <form action="/contact/store" method="POST">
        {{ csrf_field() }}
        <input type="text" name="full_name" placeholder="nama">
        <input type="email" name="email" placeholder="email">
        <input type="text" name="phone" placeholder="phone">
        <button type="submit">send</button>
    </form>
    <h1>FORM CATERING</h1>
    <form action="/catering/store" method="POST">
        {{ csrf_field() }}
        <input type="text" name="full_name" placeholder="nama">
        <input type="email" name="email" placeholder="email">
        <input type="text" name="phone" placeholder="phone">
        <input type="text" name="message" placeholder="message">
        <button type="submit">send</button>
    </form>
</body>
</html>

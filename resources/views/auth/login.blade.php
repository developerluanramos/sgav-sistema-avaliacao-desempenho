@include('components.alerts.form-errors')
<form action="{{route('auth.login')}}" method="POST">
    @csrf
    <input type="email" name="email" required><br>
    <input type="password" name="password" required><br>
    <input type="submit" value="login">
</form>

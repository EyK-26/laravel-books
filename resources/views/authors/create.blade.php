@if (empty($author->id))
<form action="{{ route('admin.authors.store') }}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="text" name="bio">
    <button type="submit">add author</button>
</form>
@endif
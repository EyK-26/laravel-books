@auth
<form action="{{ route('reviews.store') }}" method="post">
    @csrf
    <input type="hidden" name="book_id" value="{{ $book->id }}">
    <label for="text">Your Review</label>
    <textarea name="text" id="text" cols="30" rows="10" placeholder="your review"></textarea>
    <button type="submit">Submit Your Review</button>
</form>
@else
<h1>Please log in or register to leave a comment</h1>
@endauth
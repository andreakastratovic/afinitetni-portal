<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the books.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Fetch all books from the database
        $books = Book::all();

        // Return a JSON response with the book resource collection
        return BookResource::collection($books);
    }

   /**
     * Store a newly created book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
        ]);

        // Create a new book
        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->save();

        return response()->json('Book created successfully');
    }

    public function show($id)
    {
        // Find the book by its ID
        $book = Book::find($id);

        // Check if the book exists
        if (!$book) {
            // Book not found, return a 404 response
            return response()->json(['message' => 'Book not found'], 404);
        }

        // Return a JSON response with the book resource
        return new BookResource($book);
    }

    /**
     * Update the specified book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Book $book)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
        ]);

        // Update the book
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->save();

        return response()->json('Book updated successfully');
    }


    /**
     * Remove the specified book from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return response()->json('Book deleted successfully');
    }
}

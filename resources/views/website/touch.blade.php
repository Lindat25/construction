@extends('website.layouts.website')

@section('body')
<style>
    .contact-form {
        max-width: 400px;
        margin: 0 auto;
    }

    .contact-form label {
        display: block;
        margin-bottom: 10px;
    }

    .contact-form input,
    .contact-form textarea {
        width: 500px;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .contact-form button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .contact-form button:hover {
        background-color: #45a049;
    }
</style>

<div class="contact-form">
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="message">Your Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Submit</button>
    </form>

</div>

<div style="padding-bottom: 50px;"></div>
@endsection

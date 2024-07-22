@php
    use App\Services\OpenAIService;
    $openAIService = new OpenAIService();
    $test = $openAIService->generateResponse('Login');
@endphp

<!DOCTYPE html>
<html>

<head>
    <title>ChatGPT API</title>
</head>

<body>
    <form action="/generate" method="POST">
        @csrf
        <textarea name="prompt" placeholder="Inserisci il prompt" required></textarea>
        <button type="submit">Genera</button>
    </form>
    @if (isset($test))
        <p>{{ $test }}</p>
    @endif
</body>

</html>

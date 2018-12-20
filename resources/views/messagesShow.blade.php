<div>
    <ul>
        <li><b>Name</b>{{ $message->name}}</li>
        <li><b>Location</b>{{ $message->location}}</li>
        <li><b>Story</b>{{ $message->story}}</li>
    </ul>
        <p>
            <a href='/message/{{ $message->id }}/edit'><i class="fas fa-pencil-alt"></i> Edit </a>
            <a href='/message/{{ $message->id }}/delete'><i class="fas fa-pencil-alt"></i> Delete </a>
</div>
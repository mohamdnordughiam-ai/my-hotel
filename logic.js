function bookRoom(roomName) {
    alert("Du har valt att boka: " + roomName);
}

function sendMessage(event) {
    event.preventDefault();
    alert("Tack för ditt meddelande! Vi kontaktar dig snart.");
}

function scrollToRooms() {
    document.getElementById("rooms").scrollIntoView({
        behavior: "smooth"
    });
}


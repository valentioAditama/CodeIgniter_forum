<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="icon" href="<?=base_url()?>/chat.ico" type="image/gif">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
</head>

<style>
    body {
        background-color: #f3f2f3;
        margin: 0;
        padding: 0;
    }

    header {
        text-align: center;
    }

    #messages {
        padding-bottom: 30%;
    }

    li {
        list-style-type: none;
        margin-bottom: 10px;
        background-color: #6929ca;
        padding: 5px;
        border-radius: 10px;
        color: white;
        width: 50%;
    }

    li span {
        font-style: italic;
        font-weight: bolder;
        color: #b5b0b9;
    }

    #chat {
        width: 80%;
        margin: auto;
    }

    #message-form {
        text-align: center;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #b7b5b9;
    }

    input {
        width: 70%;
        height: 30px;
    }

    button {
        width: 25%;
        height: 38px;
    }

    .sent {
        text-align: right;
        background-color: #a79cb3;
        margin-left: 50%;
    }

    .sent span {
        margin-left: 5px;
        color: #6929ca;
    }
</style>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <section>
        <header>
            <!-- <h2>Firebase RealTime Chat</h2> -->
        </header>
        <input type="hidden" id="fullname" value="<?php echo $users->fullname; ?>">
        <div id="chat">
            <!-- messages will display here -->
            <ul id="messages"></ul>

            <!-- form to send message -->
            <form id="message-form">
                <input id="message-input" type="text" placeholder="Typing here..."/>
                <button id="message-btn" type="submit">Send</button>
            </form>
        </div>

    </section>

    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>

    <!-- <script>
        const firebaseConfig = {
            apiKey: "AIzaSyAdZetUkFA3GtDJ-kSx6Jy9iJJcqL_J8-M",
            authDomain: "forum-ci4.firebaseapp.com",
            projectId: "forum-ci4",
            storageBucket: "forum-ci4.appspot.com",
            messagingSenderId: "10412168844",
            appId: "1:10412168844:web:0059ed2f1268e32dba0da9",
            measurementId: "G-KJ5H1EHYP2"
        };

        firebase.initializeApp(firebaseConfig);
        var database = firebase.database();
        var myname = document.getElementById('fullname').value;

        function sendMessage() {
            var message = document.getElementById("message").value;

            firebase.database().ref("messages").push().set({
                "Sender": myname,
                "Messages": message
            });
            return false;
        }

        firebase.database().ref("messages").on("child_added", function (snapshot) {
            var html = "";
            html += "<li>";
            html += snapshot.val().Messages;
            html += "</li>";

            document.getElementById("messages").innerHTML += html;
            message.value = "";
        });
    </script> -->

    <script>
        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyAdZetUkFA3GtDJ-kSx6Jy9iJJcqL_J8-M",
            authDomain: "forum-ci4.firebaseapp.com",
            projectId: "forum-ci4",
            storageBucket: "forum-ci4.appspot.com",
            messagingSenderId: "10412168844",
            appId: "1:10412168844:web:0059ed2f1268e32dba0da9",
            measurementId: "G-KJ5H1EHYP2"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);

        // initialize database
        const db = firebase.database();

        // get user's data
        const username = document.getElementById("fullname").value;

        // submit form
        // listen for submit event on the form and call the postChat function
        document.getElementById("message-form").addEventListener("submit", sendMessage);

        // send message to db
        function sendMessage(e) {
            e.preventDefault();

            // get values to be submitted
            const timestamp = Date.now();
            const messageInput = document.getElementById("message-input");
            const message = messageInput.value;

            // clear the input box
            messageInput.value = "";

            //auto scroll to bottom
            document
                .getElementById("messages")
                .scrollIntoView({
                    behavior: "smooth",
                    block: "end",
                    inline: "nearest"
                });

            // create db collection and send in the data
            db.ref("messages/" + timestamp).set({
                username,
                message,
            });
        }

        // display the messages
        // reference the collection created earlier
        const fetchChat = db.ref("messages/");

        // check for new messages using the onChildAdded event listener
        fetchChat.on("child_added", function (snapshot) {
            const messages = snapshot.val();
            const message = `<li class=${
    username === messages.username ? "sent" : "receive"
  }><span>${messages.username}: </span>${messages.message}</li>`;
            // append the message on the page
            document.getElementById("messages").innerHTML += message;
        });
    </script>

</body>

</html>
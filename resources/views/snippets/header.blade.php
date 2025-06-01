<script src="https://cdn.polyfill.io/v3/polyfill.min.js?features=Array.prototype.includes,Element.prototype.classList,fetch"></script>
<header class="topbar">
    <div class="">
        <div class="header-info">
            <div class="farewell-ticker">
                <div class="ticker-container">
                    <!-- Messages will be inserted here by JavaScript -->
                </div>
            </div>
        </div>
    </div>
</header>


<!-- end topbar -->
<!-- start header -->
<header class="site-header-wrapper">
    <div class="site-header">
        <!-- start container -->
        <div class="container">
            <div class="header-nav">
                <!-- start site logo -->
                <div class="">
                    <a href="/" class="">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" width="70">
                    </a>
                    <!-- <a href="/" class="">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Obsequy" width="70">
                    </a> -->
                </div>
                <!-- end site logo -->
                <a href="#" id="menu-toggle">
                    <i class="fa fa-bars"></i>
                </a>

                <!-- start main navigation -->
                <nav class="main-navigation">
                    <ul class="dd-menu sf-menu">

                        <!-- <li>
                            <a href="">
                                <span></span>
                                <img src="assets/images/KSJI-logo.webp" width="50" alt="">
                                <img src="assets/images/flower-e1476975452944.png" alt="">
                            </a>
                        </li> -->

                        <li><a href="/" title="Home"><span>Home</span></a></li>
                        <!-- <li><a href="{{ route('funeral.program') }}"><span>Funeral Program</span></a></li> -->
                        <li><a href="{{ route('contact.us') }}" title="Contact us"><span>Contact</span></a></li>
                    </ul>
                </nav>
                <!-- end main navigation -->
            </div>

        </div>
        <!-- end container -->
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tickerContainer = document.querySelector('.ticker-container');

        // Show loading state
        tickerContainer.innerHTML = '<div class="ticker-message">Honoring a great life...</div>';

        fetch('assets/js/farewell-messages.json')
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(messages => {
                tickerContainer.innerHTML = ''; // Clear loading state

                // Create two full cycles for seamless looping
                const displayMessages = [...messages, ...messages];

                displayMessages.forEach(msg => {
                    const messageElement = document.createElement('div');
                    messageElement.className = 'ticker-message';

                    // Format with conditional author display
                    messageElement.innerHTML = `
                        <span class="quote-text">${msg.message}</span>
                        ${msg.author ? `<span class="quote-author">${msg.author}</span>` : ''}
                        <span class="quote-emoji">${msg.emoji}</span>
                    `;

                    tickerContainer.appendChild(messageElement);
                });

                // Dynamic timing (5 seconds per quote)
                tickerContainer.style.animationDuration = `${displayMessages.length * 8}s`;
            })
            .catch(error => {
                console.error('Error:', error);
                tickerContainer.innerHTML = `
                    <div class="ticker-message">
                        "Great men are not born great, they grow great."
                        <span class="quote-author">— Mario Puzo</span>
                        <span class="quote-emoji">👑</span>
                    </div>
                    <div class="ticker-message">
                        "Onye ndụ n'obi bụ eze (A person with life in the heart is king)"
                        <span class="quote-emoji">🌍</span>
                    </div>
                `;
                tickerContainer.style.animationDuration = '20s';
            });
    });
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get elements
        const charCountDisplay = document.querySelector('.char-count'); // Changed from word-count
        const charErrorDisplay = document.querySelector('.char-count-error'); // Changed from word-count-error
        const summernoteElement = document.getElementById('summernote');
        const MAX_CHARS = 2000; // Character limit

        // Create observer to detect Summernote changes
        const observer = new MutationObserver(function(mutations) {
            updateCharCount();
        });

        // Start observing Summernote's content
        if (summernoteElement) {
            observer.observe(summernoteElement, {
                childList: true,
                subtree: true,
                characterData: true
            });
        }

        // Also check on keyup for immediate feedback
        document.addEventListener('keyup', function(e) {
            if (e.target.closest('.note-editable')) {
                updateCharCount();
            }
        });

        function updateCharCount() {
            // Get Summernote content
            const summernote = summernoteElement.nextElementSibling.querySelector('.note-editable');
            const text = summernote.innerHTML;
            const charCount = countChars(text); // Changed to count characters
            const remaining = MAX_CHARS - charCount;

            // Update display
            charCountDisplay.textContent = charCount;

            // Show warnings
            if (charCount >= MAX_CHARS) {
                charErrorDisplay.style.display = 'inline';
                charErrorDisplay.textContent = 'Maximum 2000 characters reached!';
            } else if (charCount >= MAX_CHARS - 100) { // Warn when 100 chars left
                charCountDisplay.style.color = 'orange';
                charErrorDisplay.style.display = 'inline';
                charErrorDisplay.textContent = `${remaining} characters remaining - approaching limit!`;
            } else {
                charCountDisplay.style.color = '';
                charErrorDisplay.style.display = 'none';
            }
        }

        function countChars(text) {
            // Strip HTML tags and count characters (including spaces)
            const stripped = text.replace(/<[^>]*>/g, '');
            return stripped.length;
        }

        // Initial count
        updateCharCount();
    });
</script>

<style>
    .char-counter {
        margin-top: 5px;
        font-size: 0.9em;
        color: #666;
        margin-bottom: 20px;
    }

    .char-count-error {
        margin-left: 10px;
        font-weight: bold;
    }

    .panel {
        margin-bottom: 0px !important;
    }
</style>

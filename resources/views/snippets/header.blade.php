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
                        <li>
                            <a href=""><span></span>
                                <img src="assets/images/KSJI-logo.webp" width="50" alt="">
                                <img src="assets/images/flower-e1476975452944.png" alt="">
                            </a>
                        </li>
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
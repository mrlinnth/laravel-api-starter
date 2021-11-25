<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">
    <script src="{{ asset("vendor/scribe/js/theme-default-3.16.0.js") }}"></script>

    <link rel="stylesheet"
          href="//unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="//unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

    <script src="//cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
    <script>
        var baseUrl = "http://laravel-api.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.16.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;]">
<a href="#" id="nav-button">
      <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
      </span>
</a>
<div class="tocify-wrapper">
    <div class="lang-selector">
        <a href="#" data-language-name="bash">bash</a>
        <a href="#" data-language-name="javascript">javascript</a>
        <a href="#" data-language-name="php">php</a>
    </div>
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

    <ul class="toc-footer" id="toc-footer">
        <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
        <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
        <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>
    <ul class="toc-footer" id="last-updated">
        <li>Last updated: November 25 2021</li>
    </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
        <p>This documentation aims to provide all the information you need to work with our API.</p>
        <aside>As you scroll, you'll see code examples for working with the API in different programming languages in
            the dark area to the right (or as part of the content on mobile).
            You can switch the language used with the tabs at the top right (or from the nav menu at the top left on
            mobile).
        </aside>
        <blockquote>
            <p>Base URL</p>
        </blockquote>
        <pre><code class="language-yaml">http://laravel-api.test</code></pre>

        <h1>Authenticating requests</h1>
        <p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>


        <h2 id="endpoints-GETapi-auth-jwt-token">Get a JWT via given credentials.</h2>

        <p>
        </p>


        <span id="example-requests-GETapi-auth-jwt-token">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://laravel-api.test/api/auth/jwt/token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/auth/jwt/token"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laravel-api.test/api/auth/jwt/token',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-GETapi-auth-jwt-token">
    </span>
        <span id="execution-results-GETapi-auth-jwt-token" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-auth-jwt-token"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth-jwt-token"></code></pre>
</span>
        <span id="execution-error-GETapi-auth-jwt-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth-jwt-token"></code></pre>
</span>
        <form id="form-GETapi-auth-jwt-token" data-method="GET"
              data-path="api/auth/jwt/token"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('GETapi-auth-jwt-token', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-auth-jwt-token"
                        onclick="tryItOut('GETapi-auth-jwt-token');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-auth-jwt-token"
                        onclick="cancelTryOut('GETapi-auth-jwt-token');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-auth-jwt-token" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/auth/jwt/token</code></b>
            </p>
        </form>

        <h2 id="endpoints-GETapi-auth-jwt-refresh">Refreshes a jwt (ie. extends it&#039;s TTL)</h2>

        <p>
        </p>


        <span id="example-requests-GETapi-auth-jwt-refresh">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://laravel-api.test/api/auth/jwt/refresh" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/auth/jwt/refresh"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laravel-api.test/api/auth/jwt/refresh',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-GETapi-auth-jwt-refresh">
    </span>
        <span id="execution-results-GETapi-auth-jwt-refresh" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-auth-jwt-refresh"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth-jwt-refresh"></code></pre>
</span>
        <span id="execution-error-GETapi-auth-jwt-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth-jwt-refresh"></code></pre>
</span>
        <form id="form-GETapi-auth-jwt-refresh" data-method="GET"
              data-path="api/auth/jwt/refresh"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('GETapi-auth-jwt-refresh', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-auth-jwt-refresh"
                        onclick="tryItOut('GETapi-auth-jwt-refresh');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-auth-jwt-refresh"
                        onclick="cancelTryOut('GETapi-auth-jwt-refresh');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-auth-jwt-refresh" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/auth/jwt/refresh</code></b>
            </p>
        </form>

        <h2 id="endpoints-DELETEapi-auth-jwt-token">Log the user out (Invalidate the token).</h2>

        <p>
        </p>


        <span id="example-requests-DELETEapi-auth-jwt-token">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request DELETE \
    "http://laravel-api.test/api/auth/jwt/token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/auth/jwt/token"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://laravel-api.test/api/auth/jwt/token',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-DELETEapi-auth-jwt-token">
</span>
        <span id="execution-results-DELETEapi-auth-jwt-token" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-auth-jwt-token"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-auth-jwt-token"></code></pre>
</span>
        <span id="execution-error-DELETEapi-auth-jwt-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-auth-jwt-token"></code></pre>
</span>
        <form id="form-DELETEapi-auth-jwt-token" data-method="DELETE"
              data-path="api/auth/jwt/token"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('DELETEapi-auth-jwt-token', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEapi-auth-jwt-token"
                        onclick="tryItOut('DELETEapi-auth-jwt-token');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEapi-auth-jwt-token"
                        onclick="cancelTryOut('DELETEapi-auth-jwt-token');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEapi-auth-jwt-token" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-red">DELETE</small>
                <b><code>api/auth/jwt/token</code></b>
            </p>
        </form>

        <h2 id="endpoints-GETapi-auth-me">Get the authenticated User.</h2>

        <p>
        </p>


        <span id="example-requests-GETapi-auth-me">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://laravel-api.test/api/auth/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/auth/me"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laravel-api.test/api/auth/me',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-GETapi-auth-me">
    </span>
        <span id="execution-results-GETapi-auth-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-auth-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth-me"></code></pre>
</span>
        <span id="execution-error-GETapi-auth-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth-me"></code></pre>
</span>
        <form id="form-GETapi-auth-me" data-method="GET"
              data-path="api/auth/me"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('GETapi-auth-me', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-auth-me"
                        onclick="tryItOut('GETapi-auth-me');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-auth-me"
                        onclick="cancelTryOut('GETapi-auth-me');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-auth-me" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/auth/me</code></b>
            </p>
        </form>

        <h2 id="endpoints-GETapi-users">Request to retrieve a collection of all items of this resource</h2>

        <p>
        </p>


        <span id="example-requests-GETapi-users">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://laravel-api.test/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laravel-api.test/api/users',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-GETapi-users">
    </span>
        <span id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"></code></pre>
</span>
        <span id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users"></code></pre>
</span>
        <form id="form-GETapi-users" data-method="GET"
              data-path="api/users"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-users"
                        onclick="tryItOut('GETapi-users');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-users"
                        onclick="cancelTryOut('GETapi-users');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-users" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/users</code></b>
            </p>
        </form>

        <h2 id="endpoints-GETapi-users--uuid-">Request to retrieve a single item of this resource</h2>

        <p>
        </p>


        <span id="example-requests-GETapi-users--uuid-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://laravel-api.test/api/users/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/users/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laravel-api.test/api/users/consequatur',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-GETapi-users--uuid-">
    </span>
        <span id="execution-results-GETapi-users--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--uuid-"></code></pre>
</span>
        <span id="execution-error-GETapi-users--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--uuid-"></code></pre>
</span>
        <form id="form-GETapi-users--uuid-" data-method="GET"
              data-path="api/users/{uuid}"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('GETapi-users--uuid-', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-users--uuid-"
                        onclick="tryItOut('GETapi-users--uuid-');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-users--uuid-"
                        onclick="cancelTryOut('GETapi-users--uuid-');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-users--uuid-" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/users/{uuid}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
            <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <input type="text"
                       name="uuid"
                       data-endpoint="GETapi-users--uuid-"
                       value="consequatur"
                       data-component="url" hidden>
                <br>

            </p>
        </form>

        <h2 id="endpoints-POSTapi-users">Request to create a new resource</h2>

        <p>
        </p>


        <span id="example-requests-POSTapi-users">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://laravel-api.test/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://laravel-api.test/api/users',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-POSTapi-users">
</span>
        <span id="execution-results-POSTapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users"></code></pre>
</span>
        <span id="execution-error-POSTapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users"></code></pre>
</span>
        <form id="form-POSTapi-users" data-method="POST"
              data-path="api/users"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('POSTapi-users', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-users"
                        onclick="tryItOut('POSTapi-users');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-users"
                        onclick="cancelTryOut('POSTapi-users');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-users" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-black">POST</small>
                <b><code>api/users</code></b>
            </p>
        </form>

        <h2 id="endpoints-PUTapi-users--uuid-">Request to create or replace a resource</h2>

        <p>
        </p>


        <span id="example-requests-PUTapi-users--uuid-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request PUT \
    "http://laravel-api.test/api/users/error" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/users/error"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://laravel-api.test/api/users/error',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-PUTapi-users--uuid-">
</span>
        <span id="execution-results-PUTapi-users--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-users--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-users--uuid-"></code></pre>
</span>
        <span id="execution-error-PUTapi-users--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-users--uuid-"></code></pre>
</span>
        <form id="form-PUTapi-users--uuid-" data-method="PUT"
              data-path="api/users/{uuid}"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('PUTapi-users--uuid-', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PUTapi-users--uuid-"
                        onclick="tryItOut('PUTapi-users--uuid-');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PUTapi-users--uuid-"
                        onclick="cancelTryOut('PUTapi-users--uuid-');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PUTapi-users--uuid-" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-darkblue">PUT</small>
                <b><code>api/users/{uuid}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
            <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <input type="text"
                       name="uuid"
                       data-endpoint="PUTapi-users--uuid-"
                       value="error"
                       data-component="url" hidden>
                <br>

            </p>
        </form>

        <h2 id="endpoints-PATCHapi-users--uuid-">Request to update the specified resource</h2>

        <p>
        </p>


        <span id="example-requests-PATCHapi-users--uuid-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request PATCH \
    "http://laravel-api.test/api/users/enim" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/users/enim"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;patch(
    'http://laravel-api.test/api/users/enim',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-PATCHapi-users--uuid-">
</span>
        <span id="execution-results-PATCHapi-users--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-users--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-users--uuid-"></code></pre>
</span>
        <span id="execution-error-PATCHapi-users--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-users--uuid-"></code></pre>
</span>
        <form id="form-PATCHapi-users--uuid-" data-method="PATCH"
              data-path="api/users/{uuid}"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('PATCHapi-users--uuid-', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PATCHapi-users--uuid-"
                        onclick="tryItOut('PATCHapi-users--uuid-');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PATCHapi-users--uuid-"
                        onclick="cancelTryOut('PATCHapi-users--uuid-');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PATCHapi-users--uuid-" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-purple">PATCH</small>
                <b><code>api/users/{uuid}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
            <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <input type="text"
                       name="uuid"
                       data-endpoint="PATCHapi-users--uuid-"
                       value="enim"
                       data-component="url" hidden>
                <br>

            </p>
        </form>

        <h2 id="endpoints-DELETEapi-users--uuid-">Deletes a resource by UUID</h2>

        <p>
        </p>


        <span id="example-requests-DELETEapi-users--uuid-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request DELETE \
    "http://laravel-api.test/api/users/quaerat" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/users/quaerat"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://laravel-api.test/api/users/quaerat',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-DELETEapi-users--uuid-">
</span>
        <span id="execution-results-DELETEapi-users--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-users--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users--uuid-"></code></pre>
</span>
        <span id="execution-error-DELETEapi-users--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users--uuid-"></code></pre>
</span>
        <form id="form-DELETEapi-users--uuid-" data-method="DELETE"
              data-path="api/users/{uuid}"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--uuid-', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEapi-users--uuid-"
                        onclick="tryItOut('DELETEapi-users--uuid-');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEapi-users--uuid-"
                        onclick="cancelTryOut('DELETEapi-users--uuid-');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEapi-users--uuid-" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-red">DELETE</small>
                <b><code>api/users/{uuid}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
            <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <input type="text"
                       name="uuid"
                       data-endpoint="DELETEapi-users--uuid-"
                       value="quaerat"
                       data-component="url" hidden>
                <br>

            </p>
        </form>

        <h2 id="endpoints-GETapi-roles">Request to retrieve a collection of all items of this resource</h2>

        <p>
        </p>


        <span id="example-requests-GETapi-roles">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://laravel-api.test/api/roles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/roles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laravel-api.test/api/roles',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-GETapi-roles">
    </span>
        <span id="execution-results-GETapi-roles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-roles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-roles"></code></pre>
</span>
        <span id="execution-error-GETapi-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-roles"></code></pre>
</span>
        <form id="form-GETapi-roles" data-method="GET"
              data-path="api/roles"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('GETapi-roles', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-roles"
                        onclick="tryItOut('GETapi-roles');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-roles"
                        onclick="cancelTryOut('GETapi-roles');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-roles" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/roles</code></b>
            </p>
        </form>

        <h2 id="endpoints-GETapi-status">Status (Example API Doc)</h2>

        <p>
        </p>

        <p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
        <p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

        <span id="example-requests-GETapi-status">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://laravel-api.test/api/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laravel-api.test/api/status',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-GETapi-status">
            <blockquote>
            <p>Example response (400, Service is unhealthy):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: &quot;down&quot;,
    &quot;services&quot;: {
        &quot;database&quot;: &quot;up&quot;,
        &quot;redis&quot;: &quot;down&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: &quot;up&quot;,
    &quot;services&quot;: {
        &quot;database&quot;: &quot;up&quot;,
        &quot;redis&quot;: &quot;up&quot;
    }
}</code>
 </pre>
    </span>
        <span id="execution-results-GETapi-status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-status"></code></pre>
</span>
        <span id="execution-error-GETapi-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-status"></code></pre>
</span>
        <form id="form-GETapi-status" data-method="GET"
              data-path="api/status"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('GETapi-status', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-status"
                        onclick="tryItOut('GETapi-status');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-status"
                        onclick="cancelTryOut('GETapi-status');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-status" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/status</code></b>
            </p>
        </form>

        <h3>Response</h3>
        <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
        <p>
            <b><code>status</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
            <br>
        <p>The status of this API (<code>up</code> or <code>down</code>).</p>
        </p>
        <p>
            <b><code>services</code></b>&nbsp;&nbsp;<small>object</small> &nbsp;
            <br>
        <p>Map of each downstream service and their status (<code>up</code> or <code>down</code>).</p>
        </p>
        <h2 id="endpoints-GETapi-mongodb-users">Request to retrieve a collection of all items of this resource</h2>

        <p>
        </p>


        <span id="example-requests-GETapi-mongodb-users">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://laravel-api.test/api/mongodb-users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/mongodb-users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laravel-api.test/api/mongodb-users',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-GETapi-mongodb-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;current_page&quot;: 1,
    &quot;data&quot;: [
        {
            &quot;_id&quot;: &quot;6019383a9282f372f674b282&quot;,
            &quot;name&quot;: &quot;shashib&quot;,
            &quot;email&quot;: &quot;shashib@yopmail.com&quot;,
            &quot;password&quot;: &quot;$2a$10$eA8u9QXkRBUxF2xgMe/9X.lgHslLsBcQWvVzSMESfZgZI7fmRsn/G&quot;,
            &quot;userDeviceId&quot;: &quot;d_yv0U8yQw-t0LVcF9bDaI:APA91bH_svnnZk6VcS0ik1JEV_j64pbBpH7FdCa1Tl-NJGQTxjBc7knJBlNsTAkdlk9BRztKMrzLK6BLzqt3MuIpBHKmcMRg4rdV7v70gkVlZczs99pYEjy3BYeexcC4CHQlkLMUO3vk&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;5fb66c2217c1c057991c0b6e&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        },
        {
            &quot;_id&quot;: &quot;6019623c9282f372f674b2ae&quot;,
            &quot;name&quot;: &quot;UAT Merchant Test 1&quot;,
            &quot;email&quot;: &quot;uatmerchanttest1@yopmail.com&quot;,
            &quot;password&quot;: &quot;$2a$10$agONUTKe2CmckKBx.Xc3hOgz6Y9igtk9ioQP8wreIxmMdKVsqkg1y&quot;,
            &quot;userDeviceId&quot;: &quot;fWfbt0hyRPGa45UBaT4796:APA91bGd5h16pWuQICgEIg5e5BQpFuvTRKTeZwOUljoKrpzOJmeLW1tzfCkPvrdHQNXziJsoIkBjr_uehNWS1dFXSv4HVvWMSBmvHEpWycmRT7Kz9ApVbgtQkaAhEpLpQlC8g7NPLDId&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;5fb66c2217c1c057991c0b6e&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        },
        {
            &quot;_id&quot;: &quot;601a0353e8a93e542d68b4ce&quot;,
            &quot;name&quot;: &quot;UAT Merchant User 1&quot;,
            &quot;email&quot;: &quot;uatdummymerchantstoremgr@yopmail.com&quot;,
            &quot;phoneNumber&quot;: &quot;0123434343&quot;,
            &quot;password&quot;: &quot;$2a$10$a38RIcaXOVPYZIPgYpSyjeQmVI/VAveOAB9/I9joVBYuM47XUgHWi&quot;,
            &quot;userDeviceId&quot;: &quot;dZ-yYppHTiC-Ad1aqDrFoi:APA91bGMlE6qDMP8mMt884WWW1Aw1hvBtqr6xO-P0hGqXZog3Tpe_ipRSjeIFISqH7VWmNfjMeB879UhiTj4LSTT9wI2VJXCnfqtJ6g3P-wkhjQ8HU3k4kljXbx1M5iS8BvLLlffCbk3&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;6020a0c661c1085f58a347cb&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        },
        {
            &quot;_id&quot;: &quot;601abe8ee8a93e542d68b59b&quot;,
            &quot;name&quot;: &quot;jonnytest&quot;,
            &quot;email&quot;: &quot;jonny@alphasirius.com&quot;,
            &quot;password&quot;: &quot;$2a$10$a38RIcaXOVPYZIPgYpSyjeQmVI/VAveOAB9/I9joVBYuM47XUgHWi&quot;,
            &quot;userDeviceId&quot;: &quot;e0-IXpt2RwSqcsbUyvHGEM:APA91bFjSmsnbSSJ0KSKY8VIUnJrSOwijiWmIYkrmPS3qYK3QAmCCbiRKfSi5vZ2qoOBHkOOAmX7OWtqwZX378Pu2tOIUmnf4YZepfp_x3QYAILHKrDhVwzNawl-09DERkso7Kbz7Vmm&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;5fb66c2217c1c057991c0b6e&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        },
        {
            &quot;_id&quot;: &quot;601ac2dee8a93e542d68b5aa&quot;,
            &quot;name&quot;: &quot;Mobile APP Tester 1&quot;,
            &quot;email&quot;: &quot;uatmobileaccesstester1@yopmail.com&quot;,
            &quot;phoneNumber&quot;: &quot;0123456789&quot;,
            &quot;password&quot;: &quot;$2a$10$dBsZdKpgxSeP9mi3ATvQy.j36sWYjVs.BE6I5uyNvQg8C8MV0xF8e&quot;,
            &quot;userDeviceId&quot;: &quot;fdEBPLJXS12OXj84ip6gqZ:APA91bEU-dY77FR65Xm-IbLWgIZwquknh_J4NUyjr5_0NwvHTdsMnbbZLwFzLeQMsqN7ZQFafrSR347rU3vJqeHOjcK5QbnqFP_Dj5m501pCski2WXZ5ykgQ5GYgyfWKM0gBzA9FYpvs&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;601a023fe8a93e542d68b4c1&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        },
        {
            &quot;_id&quot;: &quot;601bb14d7fe2191b9b66f127&quot;,
            &quot;name&quot;: &quot;Riya S.&quot;,
            &quot;email&quot;: &quot;riyas@yopmail.com&quot;,
            &quot;phoneNumber&quot;: &quot;985522565&quot;,
            &quot;password&quot;: &quot;$2a$10$NaoF5fLNRv1e4L1ah.gFPOALU1Ek8rU.4JfLsGKE32yr7SMpIlrU2&quot;,
            &quot;userDeviceId&quot;: &quot;f0YfoZYFTxGY0VXFvH_XbY:APA91bEGrNN2iiQRBZROicZ-qoZGqjs2BLd4QqYrRI5AInlYlXbFqTjJcIsEgioR8QS6wagzSu6WdHJQGWXJtn2uSVIPlgyEdylmhNpMGb1DBtwJP7_gHYDfNB7OxjU5IgvQZL_Jzoah&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;601bb1107fe2191b9b66f11a&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        },
        {
            &quot;_id&quot;: &quot;601be78feb8afe44b7f1bae3&quot;,
            &quot;name&quot;: &quot; Chris Hemsworth&quot;,
            &quot;email&quot;: &quot;chris@yopmail.com&quot;,
            &quot;phoneNumber&quot;: &quot;963258552&quot;,
            &quot;password&quot;: &quot;$2a$10$CYPMl36tTx0BEMvZzD0louu7HPEVroUIb978EvQIUjcu/wv5wO.66&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;601be764eb8afe44b7f1bad6&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        },
        {
            &quot;_id&quot;: &quot;601bfd92eb8afe44b7f1baed&quot;,
            &quot;name&quot;: &quot;caluser&quot;,
            &quot;email&quot;: &quot;cal@yopmail.com&quot;,
            &quot;phoneNumber&quot;: &quot;852147963&quot;,
            &quot;password&quot;: &quot;$2a$10$gZqiiO5JJ0Q9E8ljXwM0deEwZV3lGPCn0wj49YbjN.luAb2.GNQ.C&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;601be764eb8afe44b7f1bad6&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        },
        {
            &quot;_id&quot;: &quot;601ccaffc637c711fa15e360&quot;,
            &quot;name&quot;: &quot;Aish&quot;,
            &quot;email&quot;: &quot;aish@yopmail.com&quot;,
            &quot;phoneNumber&quot;: &quot;9632541122&quot;,
            &quot;password&quot;: &quot;$2a$10$ZW9R4vH2M7GxfeMWNbOe3OCNt1m8YTNHivO6mcOJDKboHgTgQuDbC&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;601be764eb8afe44b7f1bad6&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        },
        {
            &quot;_id&quot;: &quot;601ccd9bc637c711fa15e362&quot;,
            &quot;name&quot;: &quot;Kumar K&quot;,
            &quot;email&quot;: &quot;kumar@yopmail.com&quot;,
            &quot;phoneNumber&quot;: &quot;9632554115&quot;,
            &quot;password&quot;: &quot;$2a$10$GisnOR5Xdyf0H166T2hZpu2i.bTNTc2aTugNu5CkjA0N3JinhjiOi&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;601be764eb8afe44b7f1bad6&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        },
        {
            &quot;_id&quot;: &quot;601cef7ac637c711fa15e376&quot;,
            &quot;name&quot;: &quot;Charlie&quot;,
            &quot;email&quot;: &quot;charlie@yopmail.com&quot;,
            &quot;phoneNumber&quot;: &quot;9633258522&quot;,
            &quot;password&quot;: &quot;$2a$10$zAQkFOVfNDtCkMLulCKVcumyxgkfqA9Q6Lq.Cvkz3zuHMKFWThO1i&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;601be764eb8afe44b7f1bad6&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        },
        {
            &quot;_id&quot;: &quot;601d15a45ed97d3b832a5792&quot;,
            &quot;name&quot;: &quot;sumits Kumar1&quot;,
            &quot;email&quot;: &quot;sumitk@yopmail.com&quot;,
            &quot;phoneNumber&quot;: &quot;7015358696&quot;,
            &quot;password&quot;: &quot;$2a$10$P.cEBb913tn1vJw9SWPRq.WD0gi0x49jCZ723T1Toyi0dYP47ZHBm&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;601be764eb8afe44b7f1bad6&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        },
        {
            &quot;_id&quot;: &quot;601fccb353b8203d17894854&quot;,
            &quot;name&quot;: &quot;newtest&quot;,
            &quot;email&quot;: &quot;newtest@yopmail.com&quot;,
            &quot;phoneNumber&quot;: &quot;963258412&quot;,
            &quot;password&quot;: &quot;$2a$10$p/psOYMuFhrr72sqrYYa9Ou.7l5Kt8prGdfn.dt.vcT9ccu9EbGyS&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;601a9eece8a93e542d68b57d&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        },
        {
            &quot;_id&quot;: &quot;601ff2dc61c1085f58a3477c&quot;,
            &quot;name&quot;: &quot;frankuat&quot;,
            &quot;email&quot;: &quot;frankuat@yopmail.com&quot;,
            &quot;password&quot;: &quot;$2a$10$VYME6Aj2WAMK5xs7Up54TuVB7QhPK8gpVYWlm0nIcICHiotaGMKEC&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;5fb66c2217c1c057991c0b6e&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        },
        {
            &quot;_id&quot;: &quot;6020183a61c1085f58a347b7&quot;,
            &quot;name&quot;: &quot;frankuat9&quot;,
            &quot;email&quot;: &quot;frankuat9@yopmail.com&quot;,
            &quot;password&quot;: &quot;$2a$10$bCboUTsbPJBmLv0urOukz.517Kxd8kq.up/1sz/hz0kpCNK7rQq0.&quot;,
            &quot;roles&quot;: [
                {
                    &quot;$ref&quot;: &quot;role&quot;,
                    &quot;$id&quot;: {
                        &quot;$oid&quot;: &quot;5fb66c2217c1c057991c0b6e&quot;
                    }
                }
            ],
            &quot;isActive&quot;: true,
            &quot;_class&quot;: &quot;com.food.model.User&quot;
        }
    ],
    &quot;first_page_url&quot;: &quot;http://laravel-api.test/api/mongodb-users?page=1&quot;,
    &quot;from&quot;: 1,
    &quot;last_page&quot;: 6,
    &quot;last_page_url&quot;: &quot;http://laravel-api.test/api/mongodb-users?page=6&quot;,
    &quot;links&quot;: [
        {
            &quot;url&quot;: null,
            &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://laravel-api.test/api/mongodb-users?page=1&quot;,
            &quot;label&quot;: &quot;1&quot;,
            &quot;active&quot;: true
        },
        {
            &quot;url&quot;: &quot;http://laravel-api.test/api/mongodb-users?page=2&quot;,
            &quot;label&quot;: &quot;2&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://laravel-api.test/api/mongodb-users?page=3&quot;,
            &quot;label&quot;: &quot;3&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://laravel-api.test/api/mongodb-users?page=4&quot;,
            &quot;label&quot;: &quot;4&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://laravel-api.test/api/mongodb-users?page=5&quot;,
            &quot;label&quot;: &quot;5&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://laravel-api.test/api/mongodb-users?page=6&quot;,
            &quot;label&quot;: &quot;6&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://laravel-api.test/api/mongodb-users?page=2&quot;,
            &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
            &quot;active&quot;: false
        }
    ],
    &quot;next_page_url&quot;: &quot;http://laravel-api.test/api/mongodb-users?page=2&quot;,
    &quot;path&quot;: &quot;http://laravel-api.test/api/mongodb-users&quot;,
    &quot;per_page&quot;: 15,
    &quot;prev_page_url&quot;: null,
    &quot;to&quot;: 15,
    &quot;total&quot;: 79
}</code>
 </pre>
    </span>
        <span id="execution-results-GETapi-mongodb-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-mongodb-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mongodb-users"></code></pre>
</span>
        <span id="execution-error-GETapi-mongodb-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mongodb-users"></code></pre>
</span>
        <form id="form-GETapi-mongodb-users" data-method="GET"
              data-path="api/mongodb-users"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('GETapi-mongodb-users', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-mongodb-users"
                        onclick="tryItOut('GETapi-mongodb-users');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-mongodb-users"
                        onclick="cancelTryOut('GETapi-mongodb-users');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-mongodb-users" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/mongodb-users</code></b>
            </p>
        </form>

        <h2 id="endpoints-GETapi-mongodb-users--uuid-">Request to retrieve a single item of this resource</h2>

        <p>
        </p>


        <span id="example-requests-GETapi-mongodb-users--uuid-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://laravel-api.test/api/mongodb-users/quibusdam" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/mongodb-users/quibusdam"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laravel-api.test/api/mongodb-users/quibusdam',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-GETapi-mongodb-users--uuid-">
    </span>
        <span id="execution-results-GETapi-mongodb-users--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-mongodb-users--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mongodb-users--uuid-"></code></pre>
</span>
        <span id="execution-error-GETapi-mongodb-users--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mongodb-users--uuid-"></code></pre>
</span>
        <form id="form-GETapi-mongodb-users--uuid-" data-method="GET"
              data-path="api/mongodb-users/{uuid}"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('GETapi-mongodb-users--uuid-', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-mongodb-users--uuid-"
                        onclick="tryItOut('GETapi-mongodb-users--uuid-');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-mongodb-users--uuid-"
                        onclick="cancelTryOut('GETapi-mongodb-users--uuid-');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-mongodb-users--uuid-" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/mongodb-users/{uuid}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
            <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <input type="text"
                       name="uuid"
                       data-endpoint="GETapi-mongodb-users--uuid-"
                       value="quibusdam"
                       data-component="url" hidden>
                <br>

            </p>
        </form>

        <h2 id="endpoints-POSTapi-mongodb-users">Request to create a new resource</h2>

        <p>
        </p>


        <span id="example-requests-POSTapi-mongodb-users">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://laravel-api.test/api/mongodb-users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/mongodb-users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://laravel-api.test/api/mongodb-users',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-POSTapi-mongodb-users">
</span>
        <span id="execution-results-POSTapi-mongodb-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-mongodb-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-mongodb-users"></code></pre>
</span>
        <span id="execution-error-POSTapi-mongodb-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-mongodb-users"></code></pre>
</span>
        <form id="form-POSTapi-mongodb-users" data-method="POST"
              data-path="api/mongodb-users"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('POSTapi-mongodb-users', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-mongodb-users"
                        onclick="tryItOut('POSTapi-mongodb-users');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-mongodb-users"
                        onclick="cancelTryOut('POSTapi-mongodb-users');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-mongodb-users" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-black">POST</small>
                <b><code>api/mongodb-users</code></b>
            </p>
        </form>

        <h2 id="endpoints-PUTapi-mongodb-users--uuid-">Request to create or replace a resource</h2>

        <p>
        </p>


        <span id="example-requests-PUTapi-mongodb-users--uuid-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request PUT \
    "http://laravel-api.test/api/mongodb-users/veritatis" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/mongodb-users/veritatis"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://laravel-api.test/api/mongodb-users/veritatis',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-PUTapi-mongodb-users--uuid-">
</span>
        <span id="execution-results-PUTapi-mongodb-users--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-mongodb-users--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-mongodb-users--uuid-"></code></pre>
</span>
        <span id="execution-error-PUTapi-mongodb-users--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-mongodb-users--uuid-"></code></pre>
</span>
        <form id="form-PUTapi-mongodb-users--uuid-" data-method="PUT"
              data-path="api/mongodb-users/{uuid}"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('PUTapi-mongodb-users--uuid-', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PUTapi-mongodb-users--uuid-"
                        onclick="tryItOut('PUTapi-mongodb-users--uuid-');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PUTapi-mongodb-users--uuid-"
                        onclick="cancelTryOut('PUTapi-mongodb-users--uuid-');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PUTapi-mongodb-users--uuid-" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-darkblue">PUT</small>
                <b><code>api/mongodb-users/{uuid}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
            <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <input type="text"
                       name="uuid"
                       data-endpoint="PUTapi-mongodb-users--uuid-"
                       value="veritatis"
                       data-component="url" hidden>
                <br>

            </p>
        </form>

        <h2 id="endpoints-PATCHapi-mongodb-users--uuid-">Request to update the specified resource</h2>

        <p>
        </p>


        <span id="example-requests-PATCHapi-mongodb-users--uuid-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request PATCH \
    "http://laravel-api.test/api/mongodb-users/qui" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/mongodb-users/qui"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;patch(
    'http://laravel-api.test/api/mongodb-users/qui',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-PATCHapi-mongodb-users--uuid-">
</span>
        <span id="execution-results-PATCHapi-mongodb-users--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-mongodb-users--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-mongodb-users--uuid-"></code></pre>
</span>
        <span id="execution-error-PATCHapi-mongodb-users--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-mongodb-users--uuid-"></code></pre>
</span>
        <form id="form-PATCHapi-mongodb-users--uuid-" data-method="PATCH"
              data-path="api/mongodb-users/{uuid}"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('PATCHapi-mongodb-users--uuid-', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PATCHapi-mongodb-users--uuid-"
                        onclick="tryItOut('PATCHapi-mongodb-users--uuid-');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PATCHapi-mongodb-users--uuid-"
                        onclick="cancelTryOut('PATCHapi-mongodb-users--uuid-');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PATCHapi-mongodb-users--uuid-" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-purple">PATCH</small>
                <b><code>api/mongodb-users/{uuid}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
            <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <input type="text"
                       name="uuid"
                       data-endpoint="PATCHapi-mongodb-users--uuid-"
                       value="qui"
                       data-component="url" hidden>
                <br>

            </p>
        </form>

        <h2 id="endpoints-DELETEapi-mongodb-users--uuid-">Deletes a resource by UUID</h2>

        <p>
        </p>


        <span id="example-requests-DELETEapi-mongodb-users--uuid-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request DELETE \
    "http://laravel-api.test/api/mongodb-users/est" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/mongodb-users/est"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://laravel-api.test/api/mongodb-users/est',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-DELETEapi-mongodb-users--uuid-">
</span>
        <span id="execution-results-DELETEapi-mongodb-users--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-mongodb-users--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-mongodb-users--uuid-"></code></pre>
</span>
        <span id="execution-error-DELETEapi-mongodb-users--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-mongodb-users--uuid-"></code></pre>
</span>
        <form id="form-DELETEapi-mongodb-users--uuid-" data-method="DELETE"
              data-path="api/mongodb-users/{uuid}"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('DELETEapi-mongodb-users--uuid-', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEapi-mongodb-users--uuid-"
                        onclick="tryItOut('DELETEapi-mongodb-users--uuid-');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEapi-mongodb-users--uuid-"
                        onclick="cancelTryOut('DELETEapi-mongodb-users--uuid-');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEapi-mongodb-users--uuid-" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-red">DELETE</small>
                <b><code>api/mongodb-users/{uuid}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
            <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <input type="text"
                       name="uuid"
                       data-endpoint="DELETEapi-mongodb-users--uuid-"
                       value="est"
                       data-component="url" hidden>
                <br>

            </p>
        </form>

        <h2 id="endpoints-GETapi-mongodb-users-check-password">Check existing MongoDB password hash</h2>

        <p>
        </p>


        <span id="example-requests-GETapi-mongodb-users-check-password">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://laravel-api.test/api/mongodb-users/check-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/mongodb-users/check-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laravel-api.test/api/mongodb-users/check-password',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
</span>

        <span id="example-responses-GETapi-mongodb-users-check-password">
    </span>
        <span id="execution-results-GETapi-mongodb-users-check-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-mongodb-users-check-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mongodb-users-check-password"></code></pre>
</span>
        <span id="execution-error-GETapi-mongodb-users-check-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mongodb-users-check-password"></code></pre>
</span>
        <form id="form-GETapi-mongodb-users-check-password" data-method="GET"
              data-path="api/mongodb-users/check-password"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('GETapi-mongodb-users-check-password', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-mongodb-users-check-password"
                        onclick="tryItOut('GETapi-mongodb-users-check-password');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-mongodb-users-check-password"
                        onclick="cancelTryOut('GETapi-mongodb-users-check-password');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-mongodb-users-check-password" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/mongodb-users/check-password</code></b>
            </p>
        </form>


    </div>
    <div class="dark-box">
        <div class="lang-selector">
            <a href="#" data-language-name="bash">bash</a>
            <a href="#" data-language-name="javascript">javascript</a>
            <a href="#" data-language-name="php">php</a>
        </div>
    </div>
</div>
<script>
    $(function () {
        var exampleLanguages = ["bash", "javascript", "php"];
        setupLanguages(exampleLanguages);
    });
</script>
</body>
</html>

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
        <li>Last updated: November 23 2021</li>
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
    --get "http://laravel-api.test/api/users/enim" \
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
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
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
                       value="enim"
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
    "http://laravel-api.test/api/users/quia" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/users/quia"
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
    'http://laravel-api.test/api/users/quia',
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
                       value="quia"
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
    "http://laravel-api.test/api/users/velit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/users/velit"
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
    'http://laravel-api.test/api/users/velit',
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
                       value="velit"
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
    "http://laravel-api.test/api/users/voluptatibus" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/users/voluptatibus"
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
    'http://laravel-api.test/api/users/voluptatibus',
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
                       value="voluptatibus"
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
        <h2 id="endpoints-GETapi-admins">Request to retrieve a collection of all items of this resource</h2>

        <p>
        </p>


        <span id="example-requests-GETapi-admins">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://laravel-api.test/api/admins" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/admins"
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
    'http://laravel-api.test/api/admins',
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

        <span id="example-responses-GETapi-admins">
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
            &quot;_id&quot;: &quot;5fd5010e7c471e3fdd54ae45&quot;,
            &quot;name&quot;: &quot;admin&quot;,
            &quot;email&quot;: &quot;admin@yopmail.com&quot;,
            &quot;registeredDate&quot;: 1607794958088,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;5fd5010d7c471e3fdd54ae44&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        },
        {
            &quot;_id&quot;: &quot;5fd50cf17c471e3fdd54ae5c&quot;,
            &quot;name&quot;: &quot;Shashi&quot;,
            &quot;email&quot;: &quot;shashi@yopmail.com&quot;,
            &quot;registeredDate&quot;: 1607798001794,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;5fd50cf17c471e3fdd54ae5b&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        },
        {
            &quot;_id&quot;: &quot;5fd74c3adff5fe74e8bd1b19&quot;,
            &quot;name&quot;: &quot;YTre&quot;,
            &quot;email&quot;: &quot;lalalal@yopmail.com&quot;,
            &quot;registeredDate&quot;: 1607945274396,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;5fd74c3adff5fe74e8bd1b18&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        },
        {
            &quot;_id&quot;: &quot;5fd74fe7dff5fe74e8bd1b1b&quot;,
            &quot;name&quot;: &quot;poiu&quot;,
            &quot;email&quot;: &quot;admin@yopmail.comm&quot;,
            &quot;registeredDate&quot;: 1607946215059,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;5fd74fe7dff5fe74e8bd1b1a&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        },
        {
            &quot;_id&quot;: &quot;5fd750aedff5fe74e8bd1b1d&quot;,
            &quot;name&quot;: &quot;shashi&quot;,
            &quot;email&quot;: &quot;shashitest@yopmail.com&quot;,
            &quot;registeredDate&quot;: 1607946414838,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;5fd750aedff5fe74e8bd1b1c&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        },
        {
            &quot;_id&quot;: &quot;5fd841ac9b420c1302c6f871&quot;,
            &quot;name&quot;: &quot;Shruti&quot;,
            &quot;email&quot;: &quot;shru@yopmail.com&quot;,
            &quot;registeredDate&quot;: 1608008108372,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;5fd841ac9b420c1302c6f870&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        },
        {
            &quot;_id&quot;: &quot;5fe0c2456ce3d90c268087f2&quot;,
            &quot;name&quot;: &quot;Elaine Chong&quot;,
            &quot;email&quot;: &quot;chongyeeleng7250@gmail.com&quot;,
            &quot;registeredDate&quot;: 1608565317778,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;5fe0c2456ce3d90c268087f1&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        },
        {
            &quot;_id&quot;: &quot;5fe0c6d96ce3d90c26808802&quot;,
            &quot;name&quot;: &quot;Txn Module Viewer&quot;,
            &quot;email&quot;: &quot;elaine.chong@alphasirius.io&quot;,
            &quot;registeredDate&quot;: 1608566489803,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;5fe0c6d96ce3d90c26808801&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        },
        {
            &quot;_id&quot;: &quot;5fe0c89a6ce3d90c26808804&quot;,
            &quot;name&quot;: &quot;Report module viewer&quot;,
            &quot;email&quot;: &quot;elaine.chong@gmail.com&quot;,
            &quot;registeredDate&quot;: 1608566938628,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;5fe0c89a6ce3d90c26808803&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        },
        {
            &quot;_id&quot;: &quot;5fe0ca816ce3d90c26808806&quot;,
            &quot;name&quot;: &quot;Role module viewer&quot;,
            &quot;email&quot;: &quot;elaine.chong@yahoo.com&quot;,
            &quot;registeredDate&quot;: 1608567425746,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;5fe0ca816ce3d90c26808805&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        },
        {
            &quot;_id&quot;: &quot;5fe5cf92ce0c027a446b83ff&quot;,
            &quot;name&quot;: &quot;testdashbord&quot;,
            &quot;email&quot;: &quot;dashboard@yopmail.com&quot;,
            &quot;registeredDate&quot;: 1608896402869,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;5fe5cf92ce0c027a446b83fe&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        },
        {
            &quot;_id&quot;: &quot;5fe6bf3d691a452bc669aa36&quot;,
            &quot;name&quot;: &quot;FrankUAT5&quot;,
            &quot;email&quot;: &quot;frankuat5@yopmail.com&quot;,
            &quot;registeredDate&quot;: 1608957757715,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;5fe6bf3d691a452bc669aa35&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        },
        {
            &quot;_id&quot;: &quot;5fec252be6364a6a6b5bc005&quot;,
            &quot;name&quot;: &quot;testSub&quot;,
            &quot;email&quot;: &quot;testsub@yopmail.com&quot;,
            &quot;registeredDate&quot;: 1609311531650,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;5fec252be6364a6a6b5bc004&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        },
        {
            &quot;_id&quot;: &quot;5ff86504eb5b110d5c0c5e8d&quot;,
            &quot;name&quot;: &quot;bactestu&quot;,
            &quot;email&quot;: &quot;abc@yopmail.com&quot;,
            &quot;registeredDate&quot;: 1610114308035,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;5ff86504eb5b110d5c0c5e8c&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        },
        {
            &quot;_id&quot;: &quot;6058e5b5bec760195366ab44&quot;,
            &quot;name&quot;: &quot;Jonny&quot;,
            &quot;email&quot;: &quot;jonny@alphasirius.io&quot;,
            &quot;registeredDate&quot;: 1616438708962,
            &quot;activationDate&quot;: 0,
            &quot;userId&quot;: {
                &quot;$ref&quot;: &quot;adminUser&quot;,
                &quot;$id&quot;: {
                    &quot;$oid&quot;: &quot;6058e5b4bec760195366ab43&quot;
                }
            },
            &quot;isActive&quot;: true,
            &quot;isDeleted&quot;: false,
            &quot;isAdmin&quot;: false,
            &quot;_class&quot;: &quot;com.food.model.Admin&quot;
        }
    ],
    &quot;first_page_url&quot;: &quot;http://laravel-api.test/api/admins?page=1&quot;,
    &quot;from&quot;: 1,
    &quot;last_page&quot;: 2,
    &quot;last_page_url&quot;: &quot;http://laravel-api.test/api/admins?page=2&quot;,
    &quot;links&quot;: [
        {
            &quot;url&quot;: null,
            &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://laravel-api.test/api/admins?page=1&quot;,
            &quot;label&quot;: &quot;1&quot;,
            &quot;active&quot;: true
        },
        {
            &quot;url&quot;: &quot;http://laravel-api.test/api/admins?page=2&quot;,
            &quot;label&quot;: &quot;2&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://laravel-api.test/api/admins?page=2&quot;,
            &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
            &quot;active&quot;: false
        }
    ],
    &quot;next_page_url&quot;: &quot;http://laravel-api.test/api/admins?page=2&quot;,
    &quot;path&quot;: &quot;http://laravel-api.test/api/admins&quot;,
    &quot;per_page&quot;: 15,
    &quot;prev_page_url&quot;: null,
    &quot;to&quot;: 15,
    &quot;total&quot;: 16
}</code>
 </pre>
    </span>
        <span id="execution-results-GETapi-admins" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admins"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admins"></code></pre>
</span>
        <span id="execution-error-GETapi-admins" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admins"></code></pre>
</span>
        <form id="form-GETapi-admins" data-method="GET"
              data-path="api/admins"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('GETapi-admins', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-admins"
                        onclick="tryItOut('GETapi-admins');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-admins"
                        onclick="cancelTryOut('GETapi-admins');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-admins" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/admins</code></b>
            </p>
        </form>

        <h2 id="endpoints-GETapi-admins--uuid-">Request to retrieve a single item of this resource</h2>

        <p>
        </p>


        <span id="example-requests-GETapi-admins--uuid-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://laravel-api.test/api/admins/officiis" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/admins/officiis"
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
    'http://laravel-api.test/api/admins/officiis',
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

        <span id="example-responses-GETapi-admins--uuid-">
    </span>
        <span id="execution-results-GETapi-admins--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admins--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admins--uuid-"></code></pre>
</span>
        <span id="execution-error-GETapi-admins--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admins--uuid-"></code></pre>
</span>
        <form id="form-GETapi-admins--uuid-" data-method="GET"
              data-path="api/admins/{uuid}"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('GETapi-admins--uuid-', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-admins--uuid-"
                        onclick="tryItOut('GETapi-admins--uuid-');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-admins--uuid-"
                        onclick="cancelTryOut('GETapi-admins--uuid-');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-admins--uuid-" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/admins/{uuid}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
            <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <input type="text"
                       name="uuid"
                       data-endpoint="GETapi-admins--uuid-"
                       value="officiis"
                       data-component="url" hidden>
                <br>

            </p>
        </form>

        <h2 id="endpoints-POSTapi-admins">Request to create a new resource</h2>

        <p>
        </p>


        <span id="example-requests-POSTapi-admins">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://laravel-api.test/api/admins" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/admins"
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
    'http://laravel-api.test/api/admins',
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

        <span id="example-responses-POSTapi-admins">
</span>
        <span id="execution-results-POSTapi-admins" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admins"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admins"></code></pre>
</span>
        <span id="execution-error-POSTapi-admins" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admins"></code></pre>
</span>
        <form id="form-POSTapi-admins" data-method="POST"
              data-path="api/admins"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('POSTapi-admins', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-admins"
                        onclick="tryItOut('POSTapi-admins');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-admins"
                        onclick="cancelTryOut('POSTapi-admins');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-admins" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-black">POST</small>
                <b><code>api/admins</code></b>
            </p>
        </form>

        <h2 id="endpoints-PUTapi-admins--uuid-">Request to create or replace a resource</h2>

        <p>
        </p>


        <span id="example-requests-PUTapi-admins--uuid-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request PUT \
    "http://laravel-api.test/api/admins/quia" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/admins/quia"
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
    'http://laravel-api.test/api/admins/quia',
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

        <span id="example-responses-PUTapi-admins--uuid-">
</span>
        <span id="execution-results-PUTapi-admins--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-admins--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admins--uuid-"></code></pre>
</span>
        <span id="execution-error-PUTapi-admins--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admins--uuid-"></code></pre>
</span>
        <form id="form-PUTapi-admins--uuid-" data-method="PUT"
              data-path="api/admins/{uuid}"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('PUTapi-admins--uuid-', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PUTapi-admins--uuid-"
                        onclick="tryItOut('PUTapi-admins--uuid-');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PUTapi-admins--uuid-"
                        onclick="cancelTryOut('PUTapi-admins--uuid-');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PUTapi-admins--uuid-" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-darkblue">PUT</small>
                <b><code>api/admins/{uuid}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
            <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <input type="text"
                       name="uuid"
                       data-endpoint="PUTapi-admins--uuid-"
                       value="quia"
                       data-component="url" hidden>
                <br>

            </p>
        </form>

        <h2 id="endpoints-PATCHapi-admins--uuid-">Request to update the specified resource</h2>

        <p>
        </p>


        <span id="example-requests-PATCHapi-admins--uuid-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request PATCH \
    "http://laravel-api.test/api/admins/mollitia" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/admins/mollitia"
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
    'http://laravel-api.test/api/admins/mollitia',
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

        <span id="example-responses-PATCHapi-admins--uuid-">
</span>
        <span id="execution-results-PATCHapi-admins--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-admins--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-admins--uuid-"></code></pre>
</span>
        <span id="execution-error-PATCHapi-admins--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-admins--uuid-"></code></pre>
</span>
        <form id="form-PATCHapi-admins--uuid-" data-method="PATCH"
              data-path="api/admins/{uuid}"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('PATCHapi-admins--uuid-', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PATCHapi-admins--uuid-"
                        onclick="tryItOut('PATCHapi-admins--uuid-');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PATCHapi-admins--uuid-"
                        onclick="cancelTryOut('PATCHapi-admins--uuid-');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PATCHapi-admins--uuid-" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-purple">PATCH</small>
                <b><code>api/admins/{uuid}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
            <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <input type="text"
                       name="uuid"
                       data-endpoint="PATCHapi-admins--uuid-"
                       value="mollitia"
                       data-component="url" hidden>
                <br>

            </p>
        </form>

        <h2 id="endpoints-DELETEapi-admins--uuid-">Deletes a resource by UUID</h2>

        <p>
        </p>


        <span id="example-requests-DELETEapi-admins--uuid-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request DELETE \
    "http://laravel-api.test/api/admins/atque" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://laravel-api.test/api/admins/atque"
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
    'http://laravel-api.test/api/admins/atque',
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

        <span id="example-responses-DELETEapi-admins--uuid-">
</span>
        <span id="execution-results-DELETEapi-admins--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-admins--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-admins--uuid-"></code></pre>
</span>
        <span id="execution-error-DELETEapi-admins--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-admins--uuid-"></code></pre>
</span>
        <form id="form-DELETEapi-admins--uuid-" data-method="DELETE"
              data-path="api/admins/{uuid}"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('DELETEapi-admins--uuid-', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEapi-admins--uuid-"
                        onclick="tryItOut('DELETEapi-admins--uuid-');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEapi-admins--uuid-"
                        onclick="cancelTryOut('DELETEapi-admins--uuid-');" hidden>Cancel
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEapi-admins--uuid-" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-red">DELETE</small>
                <b><code>api/admins/{uuid}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
            <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <input type="text"
                       name="uuid"
                       data-endpoint="DELETEapi-admins--uuid-"
                       value="atque"
                       data-component="url" hidden>
                <br>

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

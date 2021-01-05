<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Speedbots Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: January 5 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://local.speedbots.perso";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.4.2.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://local.speedbots.perso</code></pre><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Circuit</h1>
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/api/circuits" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/circuits"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-circuits" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-circuits"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-circuits"></code></pre>
</div>
<div id="execution-error-GETapi-circuits" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-circuits"></code></pre>
</div>
<form id="form-GETapi-circuits" data-method="GET" data-path="api/circuits" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-circuits', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-circuits" onclick="tryItOut('GETapi-circuits');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-circuits" onclick="cancelTryOut('GETapi-circuits');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-circuits" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/circuits</code></b>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://local.speedbots.perso/api/circuits" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"natus","length":"at","width":"ad","gravity":{},"gain_kill":"voluptatem","gain_victory":"laborum"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/circuits"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "natus",
    "length": "at",
    "width": "ad",
    "gravity": {},
    "gain_kill": "voluptatem",
    "gain_victory": "laborum"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-circuits" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-circuits"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-circuits"></code></pre>
</div>
<div id="execution-error-POSTapi-circuits" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-circuits"></code></pre>
</div>
<form id="form-POSTapi-circuits" data-method="POST" data-path="api/circuits" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-circuits', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-circuits" onclick="tryItOut('POSTapi-circuits');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-circuits" onclick="cancelTryOut('POSTapi-circuits');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-circuits" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/circuits</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-circuits" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>length</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="length" data-endpoint="POSTapi-circuits" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>width</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="width" data-endpoint="POSTapi-circuits" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>gravity</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="gravity" data-endpoint="POSTapi-circuits" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>gain_kill</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gain_kill" data-endpoint="POSTapi-circuits" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>gain_victory</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gain_victory" data-endpoint="POSTapi-circuits" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/api/circuits/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/circuits/rerum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-circuits--circuit-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-circuits--circuit-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-circuits--circuit-"></code></pre>
</div>
<div id="execution-error-GETapi-circuits--circuit-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-circuits--circuit-"></code></pre>
</div>
<form id="form-GETapi-circuits--circuit-" data-method="GET" data-path="api/circuits/{circuit}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-circuits--circuit-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-circuits--circuit-" onclick="tryItOut('GETapi-circuits--circuit-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-circuits--circuit-" onclick="cancelTryOut('GETapi-circuits--circuit-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-circuits--circuit-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/circuits/{circuit}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>circuit</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="circuit" data-endpoint="GETapi-circuits--circuit-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://local.speedbots.perso/api/circuits/recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/circuits/recusandae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PUTapi-circuits--circuit-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-circuits--circuit-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-circuits--circuit-"></code></pre>
</div>
<div id="execution-error-PUTapi-circuits--circuit-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-circuits--circuit-"></code></pre>
</div>
<form id="form-PUTapi-circuits--circuit-" data-method="PUT" data-path="api/circuits/{circuit}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-circuits--circuit-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-circuits--circuit-" onclick="tryItOut('PUTapi-circuits--circuit-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-circuits--circuit-" onclick="cancelTryOut('PUTapi-circuits--circuit-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-circuits--circuit-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/circuits/{circuit}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/circuits/{circuit}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>circuit</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="circuit" data-endpoint="PUTapi-circuits--circuit-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://local.speedbots.perso/api/circuits/quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/circuits/quo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-circuits--circuit-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-circuits--circuit-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-circuits--circuit-"></code></pre>
</div>
<div id="execution-error-DELETEapi-circuits--circuit-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-circuits--circuit-"></code></pre>
</div>
<form id="form-DELETEapi-circuits--circuit-" data-method="DELETE" data-path="api/circuits/{circuit}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-circuits--circuit-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-circuits--circuit-" onclick="tryItOut('DELETEapi-circuits--circuit-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-circuits--circuit-" onclick="cancelTryOut('DELETEapi-circuits--circuit-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-circuits--circuit-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/circuits/{circuit}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>circuit</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="circuit" data-endpoint="DELETEapi-circuits--circuit-" data-component="url" required  hidden>
<br>
</p>
</form><h1>Component</h1>
<h2>List components.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/api/components" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/components"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-components" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-components"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-components"></code></pre>
</div>
<div id="execution-error-GETapi-components" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-components"></code></pre>
</div>
<form id="form-GETapi-components" data-method="GET" data-path="api/components" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-components', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-components" onclick="tryItOut('GETapi-components');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-components" onclick="cancelTryOut('GETapi-components');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-components" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/components</code></b>
</p>
</form>
<h2>Create a new component.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://local.speedbots.perso/api/components" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/components"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-components" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-components"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-components"></code></pre>
</div>
<div id="execution-error-POSTapi-components" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-components"></code></pre>
</div>
<form id="form-POSTapi-components" data-method="POST" data-path="api/components" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-components', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-components" onclick="tryItOut('POSTapi-components');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-components" onclick="cancelTryOut('POSTapi-components');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-components" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/components</code></b>
</p>
</form>
<h2>Show a component details.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/api/components/harum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/components/harum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-components--component-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-components--component-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-components--component-"></code></pre>
</div>
<div id="execution-error-GETapi-components--component-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-components--component-"></code></pre>
</div>
<form id="form-GETapi-components--component-" data-method="GET" data-path="api/components/{component}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-components--component-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-components--component-" onclick="tryItOut('GETapi-components--component-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-components--component-" onclick="cancelTryOut('GETapi-components--component-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-components--component-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/components/{component}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>component</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="component" data-endpoint="GETapi-components--component-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update a component.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://local.speedbots.perso/api/components/non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/components/non"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PUTapi-components--component-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-components--component-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-components--component-"></code></pre>
</div>
<div id="execution-error-PUTapi-components--component-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-components--component-"></code></pre>
</div>
<form id="form-PUTapi-components--component-" data-method="PUT" data-path="api/components/{component}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-components--component-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-components--component-" onclick="tryItOut('PUTapi-components--component-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-components--component-" onclick="cancelTryOut('PUTapi-components--component-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-components--component-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/components/{component}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/components/{component}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>component</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="component" data-endpoint="PUTapi-components--component-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Delete a component.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://local.speedbots.perso/api/components/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/components/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-components--component-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-components--component-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-components--component-"></code></pre>
</div>
<div id="execution-error-DELETEapi-components--component-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-components--component-"></code></pre>
</div>
<form id="form-DELETEapi-components--component-" data-method="DELETE" data-path="api/components/{component}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-components--component-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-components--component-" onclick="tryItOut('DELETEapi-components--component-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-components--component-" onclick="cancelTryOut('DELETEapi-components--component-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-components--component-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/components/{component}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>component</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="component" data-endpoint="DELETEapi-components--component-" data-component="url" required  hidden>
<br>
</p>
</form><h1>Endpoints</h1>
<h2>Show pretty routes.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/routes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/routes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Routes list | Speedbots&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous"&gt;
    &lt;style type="text/css"&gt;
        body {
            padding: 60px;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0,0,0,.015);
        }

        .table td, .table th {
            border-top: none;
            font-size: 14px;
        }

        .table thead th {
            border-bottom: 1px solid #ff5722;
        }

        .text-warning {
            color: #ff5722 !important;
        }

        .tag {
            padding: 0.30em 0.8em;
        }

        table.hide-domains .domain {
            display: none;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;h1 class="display-4"&gt;Routes (39)&lt;/h1&gt;

    &lt;table class="table table-sm table-hover" style="visibility: hidden;"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;Methods&lt;/th&gt;
                &lt;th class="domain"&gt;Domain&lt;/th&gt;
                &lt;th&gt;Path&lt;/th&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Action&lt;/th&gt;
                &lt;th&gt;Middleware&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
                                        &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;docs&lt;/td&gt;
                    &lt;td&gt;scribe&lt;/td&gt;
                    &lt;td&gt;\Knuckles\Scribe\Http\Controller&lt;span class="text-warning"&gt;@webpage&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;

                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;docs.postman&lt;/td&gt;
                    &lt;td&gt;scribe.postman&lt;/td&gt;
                    &lt;td&gt;\Knuckles\Scribe\Http\Controller&lt;span class="text-warning"&gt;@postman&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;

                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;docs.openapi&lt;/td&gt;
                    &lt;td&gt;scribe.openapi&lt;/td&gt;
                    &lt;td&gt;\Knuckles\Scribe\Http\Controller&lt;span class="text-warning"&gt;@openapi&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;

                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;sanctum/csrf-cookie&lt;/td&gt;
                    &lt;td&gt;&lt;/td&gt;
                    &lt;td&gt;Laravel\Sanctum\Http\Controllers\CsrfCookieController&lt;span class="text-warning"&gt;@show&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              web
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-primary"&gt;POST&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/register&lt;/td&gt;
                    &lt;td&gt;&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\UserController&lt;span class="text-warning"&gt;@register&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, Closure
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-primary"&gt;POST&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/login&lt;/td&gt;
                    &lt;td&gt;&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\UserController&lt;span class="text-warning"&gt;@login&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, Closure
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/user&lt;/td&gt;
                    &lt;td&gt;&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\UserController&lt;span class="text-warning"&gt;@user&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api, Closure
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/ships&lt;/td&gt;
                    &lt;td&gt;ships.index&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\ShipController&lt;span class="text-warning"&gt;@index&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api, Closure
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-primary"&gt;POST&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/ships&lt;/td&gt;
                    &lt;td&gt;ships.store&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\ShipController&lt;span class="text-warning"&gt;@store&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api, Closure
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/ships/&lt;span class="text-warning"&gt;{ship}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;ships.show&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\ShipController&lt;span class="text-warning"&gt;@show&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api, Closure
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-warning"&gt;PUT&lt;/span&gt;
                                                    &lt;span class="tag tag-info"&gt;PATCH&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/ships/&lt;span class="text-warning"&gt;{ship}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;ships.update&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\ShipController&lt;span class="text-warning"&gt;@update&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api, Closure
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-danger"&gt;DELETE&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/ships/&lt;span class="text-warning"&gt;{ship}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;ships.destroy&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\ShipController&lt;span class="text-warning"&gt;@destroy&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api, Closure
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/components&lt;/td&gt;
                    &lt;td&gt;components.index&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\ComponentController&lt;span class="text-warning"&gt;@index&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-primary"&gt;POST&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/components&lt;/td&gt;
                    &lt;td&gt;components.store&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\ComponentController&lt;span class="text-warning"&gt;@store&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/components/&lt;span class="text-warning"&gt;{component}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;components.show&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\ComponentController&lt;span class="text-warning"&gt;@show&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-warning"&gt;PUT&lt;/span&gt;
                                                    &lt;span class="tag tag-info"&gt;PATCH&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/components/&lt;span class="text-warning"&gt;{component}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;components.update&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\ComponentController&lt;span class="text-warning"&gt;@update&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-danger"&gt;DELETE&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/components/&lt;span class="text-warning"&gt;{component}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;components.destroy&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\ComponentController&lt;span class="text-warning"&gt;@destroy&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/circuits&lt;/td&gt;
                    &lt;td&gt;circuits.index&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\CircuitController&lt;span class="text-warning"&gt;@index&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-primary"&gt;POST&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/circuits&lt;/td&gt;
                    &lt;td&gt;circuits.store&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\CircuitController&lt;span class="text-warning"&gt;@store&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/circuits/&lt;span class="text-warning"&gt;{circuit}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;circuits.show&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\CircuitController&lt;span class="text-warning"&gt;@show&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-warning"&gt;PUT&lt;/span&gt;
                                                    &lt;span class="tag tag-info"&gt;PATCH&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/circuits/&lt;span class="text-warning"&gt;{circuit}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;circuits.update&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\CircuitController&lt;span class="text-warning"&gt;@update&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-danger"&gt;DELETE&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/circuits/&lt;span class="text-warning"&gt;{circuit}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;circuits.destroy&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\CircuitController&lt;span class="text-warning"&gt;@destroy&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/galaxies&lt;/td&gt;
                    &lt;td&gt;galaxies.index&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\GalaxyController&lt;span class="text-warning"&gt;@index&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-primary"&gt;POST&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/galaxies&lt;/td&gt;
                    &lt;td&gt;galaxies.store&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\GalaxyController&lt;span class="text-warning"&gt;@store&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/galaxies/&lt;span class="text-warning"&gt;{galaxy}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;galaxies.show&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\GalaxyController&lt;span class="text-warning"&gt;@show&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-warning"&gt;PUT&lt;/span&gt;
                                                    &lt;span class="tag tag-info"&gt;PATCH&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/galaxies/&lt;span class="text-warning"&gt;{galaxy}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;galaxies.update&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\GalaxyController&lt;span class="text-warning"&gt;@update&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-danger"&gt;DELETE&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/galaxies/&lt;span class="text-warning"&gt;{galaxy}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;galaxies.destroy&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\GalaxyController&lt;span class="text-warning"&gt;@destroy&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/upgrades&lt;/td&gt;
                    &lt;td&gt;upgrades.index&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\UpgradeController&lt;span class="text-warning"&gt;@index&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-primary"&gt;POST&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/upgrades&lt;/td&gt;
                    &lt;td&gt;upgrades.store&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\UpgradeController&lt;span class="text-warning"&gt;@store&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/upgrades/&lt;span class="text-warning"&gt;{upgrade}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;upgrades.show&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\UpgradeController&lt;span class="text-warning"&gt;@show&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-warning"&gt;PUT&lt;/span&gt;
                                                    &lt;span class="tag tag-info"&gt;PATCH&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/upgrades/&lt;span class="text-warning"&gt;{upgrade}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;upgrades.update&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\UpgradeController&lt;span class="text-warning"&gt;@update&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-danger"&gt;DELETE&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/upgrades/&lt;span class="text-warning"&gt;{upgrade}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;upgrades.destroy&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\UpgradeController&lt;span class="text-warning"&gt;@destroy&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/weapons&lt;/td&gt;
                    &lt;td&gt;weapons.index&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\WeaponController&lt;span class="text-warning"&gt;@index&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-primary"&gt;POST&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/weapons&lt;/td&gt;
                    &lt;td&gt;weapons.store&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\WeaponController&lt;span class="text-warning"&gt;@store&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/weapons/&lt;span class="text-warning"&gt;{weapon}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;weapons.show&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\WeaponController&lt;span class="text-warning"&gt;@show&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-warning"&gt;PUT&lt;/span&gt;
                                                    &lt;span class="tag tag-info"&gt;PATCH&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/weapons/&lt;span class="text-warning"&gt;{weapon}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;weapons.update&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\WeaponController&lt;span class="text-warning"&gt;@update&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-danger"&gt;DELETE&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;api/weapons/&lt;span class="text-warning"&gt;{weapon}&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;weapons.destroy&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\WeaponController&lt;span class="text-warning"&gt;@destroy&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              api, auth:api
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;/&lt;/td&gt;
                    &lt;td&gt;&lt;/td&gt;
                    &lt;td&gt;Closure&lt;/td&gt;
                    &lt;td&gt;
                                              web
                                          &lt;/td&gt;
                &lt;/tr&gt;
                            &lt;tr&gt;
                    &lt;td&gt;
                                                    &lt;span class="tag tag-success"&gt;GET&lt;/span&gt;
                                            &lt;/td&gt;
                    &lt;td class="domain domain-empty"&gt;&lt;/td&gt;
                    &lt;td&gt;test&lt;/td&gt;
                    &lt;td&gt;race.test&lt;/td&gt;
                    &lt;td&gt;App\Http\Controllers\RaceController&lt;span class="text-warning"&gt;@start&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                                              web, Closure
                                          &lt;/td&gt;
                &lt;/tr&gt;
                    &lt;/tbody&gt;
    &lt;/table&gt;

    &lt;script type="text/javascript"&gt;
        function hideEmptyDomainColumn() {
            var table = document.querySelector('.table');
            var domains = table.querySelectorAll('tbody .domain');
            var emptyDomains = table.querySelectorAll('tbody .domain-empty');
            if (domains.length == emptyDomains.length) {
                table.className += ' hide-domains';
            }

            table.style.visibility = 'visible';
        }

        hideEmptyDomainColumn();
    &lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GETroutes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETroutes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETroutes"></code></pre>
</div>
<div id="execution-error-GETroutes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETroutes"></code></pre>
</div>
<form id="form-GETroutes" data-method="GET" data-path="routes" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETroutes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETroutes" onclick="tryItOut('GETroutes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETroutes" onclick="cancelTryOut('GETroutes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETroutes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>routes</code></b>
</p>
</form>
<h2>Return an empty response simply to trigger the storage of the CSRF cookie in the browser.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsanctum-csrf-cookie"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"></code></pre>
</div>
<div id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie"></code></pre>
</div>
<form id="form-GETsanctum-csrf-cookie" data-method="GET" data-path="sanctum/csrf-cookie" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsanctum-csrf-cookie" onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsanctum-csrf-cookie" onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsanctum-csrf-cookie" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>sanctum/csrf-cookie</code></b>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/api/galaxies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/galaxies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-galaxies" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-galaxies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-galaxies"></code></pre>
</div>
<div id="execution-error-GETapi-galaxies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-galaxies"></code></pre>
</div>
<form id="form-GETapi-galaxies" data-method="GET" data-path="api/galaxies" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-galaxies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-galaxies" onclick="tryItOut('GETapi-galaxies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-galaxies" onclick="cancelTryOut('GETapi-galaxies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-galaxies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/galaxies</code></b>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://local.speedbots.perso/api/galaxies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"suscipit","description":"qui"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/galaxies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "suscipit",
    "description": "qui"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-galaxies" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-galaxies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-galaxies"></code></pre>
</div>
<div id="execution-error-POSTapi-galaxies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-galaxies"></code></pre>
</div>
<form id="form-POSTapi-galaxies" data-method="POST" data-path="api/galaxies" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-galaxies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-galaxies" onclick="tryItOut('POSTapi-galaxies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-galaxies" onclick="cancelTryOut('POSTapi-galaxies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-galaxies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/galaxies</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-galaxies" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-galaxies" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/api/galaxies/distinctio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/galaxies/distinctio"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-galaxies--galaxy-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-galaxies--galaxy-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-galaxies--galaxy-"></code></pre>
</div>
<div id="execution-error-GETapi-galaxies--galaxy-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-galaxies--galaxy-"></code></pre>
</div>
<form id="form-GETapi-galaxies--galaxy-" data-method="GET" data-path="api/galaxies/{galaxy}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-galaxies--galaxy-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-galaxies--galaxy-" onclick="tryItOut('GETapi-galaxies--galaxy-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-galaxies--galaxy-" onclick="cancelTryOut('GETapi-galaxies--galaxy-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-galaxies--galaxy-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/galaxies/{galaxy}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>galaxy</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="galaxy" data-endpoint="GETapi-galaxies--galaxy-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://local.speedbots.perso/api/galaxies/porro" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/galaxies/porro"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PUTapi-galaxies--galaxy-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-galaxies--galaxy-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-galaxies--galaxy-"></code></pre>
</div>
<div id="execution-error-PUTapi-galaxies--galaxy-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-galaxies--galaxy-"></code></pre>
</div>
<form id="form-PUTapi-galaxies--galaxy-" data-method="PUT" data-path="api/galaxies/{galaxy}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-galaxies--galaxy-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-galaxies--galaxy-" onclick="tryItOut('PUTapi-galaxies--galaxy-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-galaxies--galaxy-" onclick="cancelTryOut('PUTapi-galaxies--galaxy-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-galaxies--galaxy-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/galaxies/{galaxy}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/galaxies/{galaxy}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>galaxy</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="galaxy" data-endpoint="PUTapi-galaxies--galaxy-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://local.speedbots.perso/api/galaxies/ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/galaxies/ducimus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-galaxies--galaxy-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-galaxies--galaxy-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-galaxies--galaxy-"></code></pre>
</div>
<div id="execution-error-DELETEapi-galaxies--galaxy-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-galaxies--galaxy-"></code></pre>
</div>
<form id="form-DELETEapi-galaxies--galaxy-" data-method="DELETE" data-path="api/galaxies/{galaxy}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-galaxies--galaxy-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-galaxies--galaxy-" onclick="tryItOut('DELETEapi-galaxies--galaxy-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-galaxies--galaxy-" onclick="cancelTryOut('DELETEapi-galaxies--galaxy-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-galaxies--galaxy-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/galaxies/{galaxy}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>galaxy</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="galaxy" data-endpoint="DELETEapi-galaxies--galaxy-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>/</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

        &lt;title&gt;Laravel&lt;/title&gt;

        &lt;!-- Fonts --&gt;
        &lt;link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet"&gt;

        &lt;!-- Styles --&gt;
        &lt;style&gt;
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        &lt;/style&gt;

        &lt;style&gt;
            body {
                font-family: 'Nunito';
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body class="antialiased"&gt;
        &lt;div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"&gt;

            &lt;div class="max-w-6xl mx-auto sm:px-6 lg:px-8"&gt;
                &lt;div class="flex justify-center pt-8 sm:justify-start sm:pt-0"&gt;
                    &lt;svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20"&gt;
                        &lt;g clip-path="url(#clip0)" fill="#EF3B2D"&gt;
                            &lt;path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/&gt;
                        &lt;/g&gt;
                    &lt;/svg&gt;
                &lt;/div&gt;

                &lt;div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg"&gt;
                    &lt;div class="grid grid-cols-1 md:grid-cols-2"&gt;
                        &lt;div class="p-6"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&gt;&lt;path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class="ml-4 text-lg leading-7 font-semibold"&gt;&lt;a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white"&gt;Documentation&lt;/a&gt;&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class="ml-12"&gt;
                                &lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&gt;
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&gt;&lt;path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"&gt;&lt;/path&gt;&lt;path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class="ml-4 text-lg leading-7 font-semibold"&gt;&lt;a href="https://laracasts.com" class="underline text-gray-900 dark:text-white"&gt;Laracasts&lt;/a&gt;&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class="ml-12"&gt;
                                &lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&gt;
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="p-6 border-t border-gray-200 dark:border-gray-700"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&gt;&lt;path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class="ml-4 text-lg leading-7 font-semibold"&gt;&lt;a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white"&gt;Laravel News&lt;/a&gt;&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class="ml-12"&gt;
                                &lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&gt;
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&gt;&lt;path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white"&gt;Vibrant Ecosystem&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class="ml-12"&gt;
                                &lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&gt;
                                    Laravel's robust library of first-party tools and libraries, such as &lt;a href="https://forge.laravel.com" class="underline"&gt;Forge&lt;/a&gt;, &lt;a href="https://vapor.laravel.com" class="underline"&gt;Vapor&lt;/a&gt;, &lt;a href="https://nova.laravel.com" class="underline"&gt;Nova&lt;/a&gt;, and &lt;a href="https://envoyer.io" class="underline"&gt;Envoyer&lt;/a&gt; help you take your projects to the next level. Pair them with powerful open source libraries like &lt;a href="https://laravel.com/docs/billing" class="underline"&gt;Cashier&lt;/a&gt;, &lt;a href="https://laravel.com/docs/dusk" class="underline"&gt;Dusk&lt;/a&gt;, &lt;a href="https://laravel.com/docs/broadcasting" class="underline"&gt;Echo&lt;/a&gt;, &lt;a href="https://laravel.com/docs/horizon" class="underline"&gt;Horizon&lt;/a&gt;, &lt;a href="https://laravel.com/docs/sanctum" class="underline"&gt;Sanctum&lt;/a&gt;, &lt;a href="https://laravel.com/docs/telescope" class="underline"&gt;Telescope&lt;/a&gt;, and more.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;

                &lt;div class="flex justify-center mt-4 sm:items-center sm:justify-between"&gt;
                    &lt;div class="text-center text-sm text-gray-500 sm:text-left"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400"&gt;
                                &lt;path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"&gt;&lt;/path&gt;
                            &lt;/svg&gt;

                            &lt;a href="https://laravel.bigcartel.com" class="ml-1 underline"&gt;
                                Shop
                            &lt;/a&gt;

                            &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400"&gt;
                                &lt;path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"&gt;&lt;/path&gt;
                            &lt;/svg&gt;

                            &lt;a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline"&gt;
                                Sponsor
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;

                    &lt;div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0"&gt;
                        Laravel v8.20.1 (PHP v7.4.11)
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form><h1>Race</h1>
<h2>Test de course grandeur nature ! :D</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/test" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/test"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
.
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="10"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="15"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="4"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="20"&gt;-&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="9"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="8"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="2"&gt;+&lt;/span&gt;
                                    &lt;span title="23"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="18"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="7"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="19"&gt;-&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="3"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="12"&gt;-&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="14"&gt;-&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="6"&gt;-&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .

            .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="10"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="15"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="4"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="20"&gt;-&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="9"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="8"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="2"&gt;+&lt;/span&gt;
                                    &lt;span title="23"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="18"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="7"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="19"&gt;-&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="3"&gt;+&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="12"&gt;-&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="14"&gt;-&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                            &lt;span title="6"&gt;-&lt;/span&gt;
                        .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
                .
</code></pre>
<div id="execution-results-GETtest" hidden>
    <blockquote>Received response<span id="execution-response-status-GETtest"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETtest"></code></pre>
</div>
<div id="execution-error-GETtest" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETtest"></code></pre>
</div>
<form id="form-GETtest" data-method="GET" data-path="test" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETtest', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETtest" onclick="tryItOut('GETtest');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETtest" onclick="cancelTryOut('GETtest');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETtest" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>test</code></b>
</p>
</form><h1>Ship</h1>
<h2>Show ships.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/api/ships" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/ships"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-ships" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-ships"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-ships"></code></pre>
</div>
<div id="execution-error-GETapi-ships" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-ships"></code></pre>
</div>
<form id="form-GETapi-ships" data-method="GET" data-path="api/ships" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-ships', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-ships" onclick="tryItOut('GETapi-ships');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-ships" onclick="cancelTryOut('GETapi-ships');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-ships" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/ships</code></b>
</p>
</form>
<h2>Create a new ship.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://local.speedbots.perso/api/ships" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":"est","class":"assumenda","health":{}}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/ships"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "est",
    "class": "assumenda",
    "health": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-ships" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-ships"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-ships"></code></pre>
</div>
<div id="execution-error-POSTapi-ships" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-ships"></code></pre>
</div>
<form id="form-POSTapi-ships" data-method="POST" data-path="api/ships" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-ships', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-ships" onclick="tryItOut('POSTapi-ships');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-ships" onclick="cancelTryOut('POSTapi-ships');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-ships" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/ships</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="POSTapi-ships" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>class</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="class" data-endpoint="POSTapi-ships" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>health</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="health" data-endpoint="POSTapi-ships" data-component="body"  hidden>
<br>
</p>

</form>
<h2>Show a ship details.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/api/ships/nostrum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/ships/nostrum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-ships--ship-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-ships--ship-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-ships--ship-"></code></pre>
</div>
<div id="execution-error-GETapi-ships--ship-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-ships--ship-"></code></pre>
</div>
<form id="form-GETapi-ships--ship-" data-method="GET" data-path="api/ships/{ship}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-ships--ship-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-ships--ship-" onclick="tryItOut('GETapi-ships--ship-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-ships--ship-" onclick="cancelTryOut('GETapi-ships--ship-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-ships--ship-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/ships/{ship}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ship</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ship" data-endpoint="GETapi-ships--ship-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update a ship.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://local.speedbots.perso/api/ships/velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":"tenetur","class":"qui","health":{}}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/ships/velit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "tenetur",
    "class": "qui",
    "health": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PUTapi-ships--ship-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-ships--ship-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-ships--ship-"></code></pre>
</div>
<div id="execution-error-PUTapi-ships--ship-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-ships--ship-"></code></pre>
</div>
<form id="form-PUTapi-ships--ship-" data-method="PUT" data-path="api/ships/{ship}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-ships--ship-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-ships--ship-" onclick="tryItOut('PUTapi-ships--ship-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-ships--ship-" onclick="cancelTryOut('PUTapi-ships--ship-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-ships--ship-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/ships/{ship}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/ships/{ship}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ship</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ship" data-endpoint="PUTapi-ships--ship-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="PUTapi-ships--ship-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>class</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="class" data-endpoint="PUTapi-ships--ship-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>health</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="health" data-endpoint="PUTapi-ships--ship-" data-component="body"  hidden>
<br>
</p>

</form>
<h2>Delete a ship.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://local.speedbots.perso/api/ships/nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/ships/nihil"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-ships--ship-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-ships--ship-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-ships--ship-"></code></pre>
</div>
<div id="execution-error-DELETEapi-ships--ship-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-ships--ship-"></code></pre>
</div>
<form id="form-DELETEapi-ships--ship-" data-method="DELETE" data-path="api/ships/{ship}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-ships--ship-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-ships--ship-" onclick="tryItOut('DELETEapi-ships--ship-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-ships--ship-" onclick="cancelTryOut('DELETEapi-ships--ship-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-ships--ship-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/ships/{ship}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ship</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ship" data-endpoint="DELETEapi-ships--ship-" data-component="url" required  hidden>
<br>
</p>
</form><h1>Upgrade</h1>
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/api/upgrades" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/upgrades"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-upgrades" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-upgrades"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-upgrades"></code></pre>
</div>
<div id="execution-error-GETapi-upgrades" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-upgrades"></code></pre>
</div>
<form id="form-GETapi-upgrades" data-method="GET" data-path="api/upgrades" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-upgrades', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-upgrades" onclick="tryItOut('GETapi-upgrades');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-upgrades" onclick="cancelTryOut('GETapi-upgrades');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-upgrades" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/upgrades</code></b>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://local.speedbots.perso/api/upgrades" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/upgrades"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-upgrades" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-upgrades"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-upgrades"></code></pre>
</div>
<div id="execution-error-POSTapi-upgrades" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-upgrades"></code></pre>
</div>
<form id="form-POSTapi-upgrades" data-method="POST" data-path="api/upgrades" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-upgrades', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-upgrades" onclick="tryItOut('POSTapi-upgrades');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-upgrades" onclick="cancelTryOut('POSTapi-upgrades');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-upgrades" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/upgrades</code></b>
</p>
</form>
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/api/upgrades/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/upgrades/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-upgrades--upgrade-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-upgrades--upgrade-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-upgrades--upgrade-"></code></pre>
</div>
<div id="execution-error-GETapi-upgrades--upgrade-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-upgrades--upgrade-"></code></pre>
</div>
<form id="form-GETapi-upgrades--upgrade-" data-method="GET" data-path="api/upgrades/{upgrade}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-upgrades--upgrade-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-upgrades--upgrade-" onclick="tryItOut('GETapi-upgrades--upgrade-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-upgrades--upgrade-" onclick="cancelTryOut('GETapi-upgrades--upgrade-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-upgrades--upgrade-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/upgrades/{upgrade}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>upgrade</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="upgrade" data-endpoint="GETapi-upgrades--upgrade-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://local.speedbots.perso/api/upgrades/iste" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/upgrades/iste"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PUTapi-upgrades--upgrade-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-upgrades--upgrade-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-upgrades--upgrade-"></code></pre>
</div>
<div id="execution-error-PUTapi-upgrades--upgrade-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-upgrades--upgrade-"></code></pre>
</div>
<form id="form-PUTapi-upgrades--upgrade-" data-method="PUT" data-path="api/upgrades/{upgrade}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-upgrades--upgrade-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-upgrades--upgrade-" onclick="tryItOut('PUTapi-upgrades--upgrade-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-upgrades--upgrade-" onclick="cancelTryOut('PUTapi-upgrades--upgrade-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-upgrades--upgrade-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/upgrades/{upgrade}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/upgrades/{upgrade}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>upgrade</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="upgrade" data-endpoint="PUTapi-upgrades--upgrade-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://local.speedbots.perso/api/upgrades/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/upgrades/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-upgrades--upgrade-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-upgrades--upgrade-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-upgrades--upgrade-"></code></pre>
</div>
<div id="execution-error-DELETEapi-upgrades--upgrade-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-upgrades--upgrade-"></code></pre>
</div>
<form id="form-DELETEapi-upgrades--upgrade-" data-method="DELETE" data-path="api/upgrades/{upgrade}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-upgrades--upgrade-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-upgrades--upgrade-" onclick="tryItOut('DELETEapi-upgrades--upgrade-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-upgrades--upgrade-" onclick="cancelTryOut('DELETEapi-upgrades--upgrade-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-upgrades--upgrade-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/upgrades/{upgrade}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>upgrade</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="upgrade" data-endpoint="DELETEapi-upgrades--upgrade-" data-component="url" required  hidden>
<br>
</p>
</form><h1>User</h1>
<h2>Registers a user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://local.speedbots.perso/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quia","email":"kathryne32@example.org","password":"molestiae"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quia",
    "email": "kathryne32@example.org",
    "password": "molestiae"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</div>
<div id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</div>
<form id="form-POSTapi-register" data-method="POST" data-path="api/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-register" onclick="tryItOut('POSTapi-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-register" onclick="cancelTryOut('POSTapi-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>Login user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://local.speedbots.perso/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/login</code></b>
</p>
</form>
<h2>Get user details.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form><h1>Weapon</h1>
<h2>List weapons.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/api/weapons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/weapons"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-weapons" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-weapons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-weapons"></code></pre>
</div>
<div id="execution-error-GETapi-weapons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-weapons"></code></pre>
</div>
<form id="form-GETapi-weapons" data-method="GET" data-path="api/weapons" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-weapons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-weapons" onclick="tryItOut('GETapi-weapons');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-weapons" onclick="cancelTryOut('GETapi-weapons');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-weapons" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/weapons</code></b>
</p>
</form>
<h2>Create a weapon.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://local.speedbots.perso/api/weapons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/weapons"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-weapons" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-weapons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-weapons"></code></pre>
</div>
<div id="execution-error-POSTapi-weapons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-weapons"></code></pre>
</div>
<form id="form-POSTapi-weapons" data-method="POST" data-path="api/weapons" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-weapons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-weapons" onclick="tryItOut('POSTapi-weapons');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-weapons" onclick="cancelTryOut('POSTapi-weapons');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-weapons" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/weapons</code></b>
</p>
</form>
<h2>Show weapon details.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://local.speedbots.perso/api/weapons/reprehenderit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/weapons/reprehenderit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-weapons--weapon-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-weapons--weapon-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-weapons--weapon-"></code></pre>
</div>
<div id="execution-error-GETapi-weapons--weapon-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-weapons--weapon-"></code></pre>
</div>
<form id="form-GETapi-weapons--weapon-" data-method="GET" data-path="api/weapons/{weapon}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-weapons--weapon-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-weapons--weapon-" onclick="tryItOut('GETapi-weapons--weapon-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-weapons--weapon-" onclick="cancelTryOut('GETapi-weapons--weapon-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-weapons--weapon-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/weapons/{weapon}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>weapon</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="weapon" data-endpoint="GETapi-weapons--weapon-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update a weapon.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://local.speedbots.perso/api/weapons/praesentium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/weapons/praesentium"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PUTapi-weapons--weapon-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-weapons--weapon-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-weapons--weapon-"></code></pre>
</div>
<div id="execution-error-PUTapi-weapons--weapon-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-weapons--weapon-"></code></pre>
</div>
<form id="form-PUTapi-weapons--weapon-" data-method="PUT" data-path="api/weapons/{weapon}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-weapons--weapon-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-weapons--weapon-" onclick="tryItOut('PUTapi-weapons--weapon-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-weapons--weapon-" onclick="cancelTryOut('PUTapi-weapons--weapon-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-weapons--weapon-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/weapons/{weapon}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/weapons/{weapon}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>weapon</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="weapon" data-endpoint="PUTapi-weapons--weapon-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Delete a weapon.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://local.speedbots.perso/api/weapons/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://local.speedbots.perso/api/weapons/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-weapons--weapon-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-weapons--weapon-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-weapons--weapon-"></code></pre>
</div>
<div id="execution-error-DELETEapi-weapons--weapon-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-weapons--weapon-"></code></pre>
</div>
<form id="form-DELETEapi-weapons--weapon-" data-method="DELETE" data-path="api/weapons/{weapon}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-weapons--weapon-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-weapons--weapon-" onclick="tryItOut('DELETEapi-weapons--weapon-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-weapons--weapon-" onclick="cancelTryOut('DELETEapi-weapons--weapon-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-weapons--weapon-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/weapons/{weapon}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>weapon</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="weapon" data-endpoint="DELETEapi-weapons--weapon-" data-component="url" required  hidden>
<br>
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>
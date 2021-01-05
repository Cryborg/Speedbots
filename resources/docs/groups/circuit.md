# Circuit


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://local.speedbots.perso/api/circuits" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/circuits"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (403):

```json
{
    "message": "Unauthenticated."
}
```
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


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://local.speedbots.perso/api/circuits" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"dolorem","length":"ut","width":"rerum","gravity":{},"gain_kill":"ut","gain_victory":"dolor"}'

```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/circuits"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "dolorem",
    "length": "ut",
    "width": "rerum",
    "gravity": {},
    "gain_kill": "ut",
    "gain_victory": "dolor"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://local.speedbots.perso/api/circuits/voluptate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/circuits/voluptate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (403):

```json
{
    "message": "Unauthenticated."
}
```
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


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://local.speedbots.perso/api/circuits/delectus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/circuits/delectus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


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


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://local.speedbots.perso/api/circuits/doloremque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/circuits/doloremque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


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
</form>




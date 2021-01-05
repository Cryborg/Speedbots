# Ship


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://local.speedbots.perso/api/ships" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/ships"
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


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://local.speedbots.perso/api/ships" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":"quia","class":"a","health":{}}'

```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/ships"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "quia",
    "class": "a",
    "health": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://local.speedbots.perso/api/ships/vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/ships/vel"
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


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://local.speedbots.perso/api/ships/voluptates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":"eos","class":"id","health":{}}'

```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/ships/voluptates"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "eos",
    "class": "id",
    "health": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://local.speedbots.perso/api/ships/nesciunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/ships/nesciunt"
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
</form>




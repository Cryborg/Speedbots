# Weapon


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://local.speedbots.perso/api/weapons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/weapons"
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


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://local.speedbots.perso/api/weapons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/weapons"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


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


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://local.speedbots.perso/api/weapons/sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/weapons/sunt"
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


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://local.speedbots.perso/api/weapons/excepturi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/weapons/excepturi"
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


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://local.speedbots.perso/api/weapons/itaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/weapons/itaque"
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




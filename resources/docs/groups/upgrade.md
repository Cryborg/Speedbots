# Upgrade


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://local.speedbots.perso/api/upgrades" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/upgrades"
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


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://local.speedbots.perso/api/upgrades" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/upgrades"
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


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://local.speedbots.perso/api/upgrades/accusantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/upgrades/accusantium"
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


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://local.speedbots.perso/api/upgrades/vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/upgrades/vel"
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


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://local.speedbots.perso/api/upgrades/quibusdam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/upgrades/quibusdam"
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
</form>




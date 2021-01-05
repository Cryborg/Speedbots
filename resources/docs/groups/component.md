# Component


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://local.speedbots.perso/api/components" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/components"
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


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://local.speedbots.perso/api/components" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/components"
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


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://local.speedbots.perso/api/components/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/components/et"
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


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://local.speedbots.perso/api/components/eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/components/eos"
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


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://local.speedbots.perso/api/components/nisi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://local.speedbots.perso/api/components/nisi"
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
</form>




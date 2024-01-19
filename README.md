# Fake News API Documentation
API documentation for the Fake News application

## Version: 1.0.0

### /

#### GET
##### Summary:

Get quiz information

##### Responses

| Code | Description |
| ---- | ----------- |
| 200 | Successful operation |

### /quizimg

#### GET
##### Summary:

Get quiz questions with images

##### Responses

| Code | Description |
| ---- | ----------- |
| 200 | Successful operation |

### /admin

#### GET
##### Summary:

Get information about the admin area

##### Responses

| Code | Description |
| ---- | ----------- |
| 200 | Successful operation |

### /admin/questionsimg

#### GET
##### Summary:

Get all questions with images

##### Responses

| Code | Description |
| ---- | ----------- |
| 200 | Successful operation |

### /admin/questionsimg/{idQuestion}

#### GET
##### Summary:

Get details of a specific question by ID

##### Parameters

| Name | Located in | Description | Required | Schema |
| ---- | ---------- | ----------- | -------- | ---- |
| idQuestion | path |  | Yes | integer |

##### Responses

| Code | Description |
| ---- | ----------- |
| 200 | Successful operation |

### /admin/questionimg/create

#### GET
##### Summary:

Get form to add questions

##### Responses

| Code | Description |
| ---- | ----------- |
| 200 | Successful operation |

### /admin/questionimg

#### POST
##### Summary:

Create a new question with images

##### Responses

| Code | Description |
| ---- | ----------- |
| 200 | Successful operation |

### /admin/questionsimg/{id}/edit

#### GET
##### Summary:

Get form to edit a specific question by ID

##### Parameters

| Name | Located in | Description | Required | Schema |
| ---- | ---------- | ----------- | -------- | ---- |
| id | path |  | Yes | integer |

##### Responses

| Code | Description |
| ---- | ----------- |
| 200 | Successful operation |

### /admin/questionsimg/{id}

#### PUT
##### Summary:

Edit a specific question by ID

##### Parameters

| Name | Located in | Description | Required | Schema |
| ---- | ---------- | ----------- | -------- | ---- |
| id | path |  | Yes | integer |

##### Responses

| Code | Description |
| ---- | ----------- |
| 200 | Successful operation |

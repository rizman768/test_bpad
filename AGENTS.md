# AGENTS.md

## 1. Project Overview

This project is a Laravel-based web application developed for BPAD.

AI assistants must understand the existing application structure and implementation before making changes. All development should follow the existing project conventions.

## 2. Technology Stack

- Backend: PHP / Laravel
- Frontend: Blade Templates, HTML, CSS, JavaScript
- Database: Follow the existing database configuration.
- API Integration: External REST APIs.

Do not assume additional frameworks, libraries, or services are being used unless they are already present in the project.

## 3. Development Guidelines

- Follow the existing Laravel architecture and coding conventions.
- Use Controllers to handle HTTP requests.
- Use Models and Eloquent ORM for database operations when applicable.
- Use Blade for server-side rendering.
- Keep business logic organized and maintainable.
- Use Laravel validation for incoming requests.
- Handle exceptions and API errors appropriately.
- Avoid unnecessary dependencies and duplicated code.

## 4. API Integration

- Follow the existing API integration patterns.
- Keep API base URLs and credentials in environment configuration where applicable.
- Never hardcode API credentials, tokens, or passwords.
- Do not invent API endpoints, request parameters, or response structures.
- Inspect existing API implementations before modifying integrations.
- Handle HTTP errors and unexpected API responses.

## 5. Code Modification Rules

Before modifying code:

1. Inspect the relevant files and existing implementation.
2. Understand the current application flow.
3. Identify the files that need to be changed.
4. Avoid modifying unrelated functionality.

When implementing changes:

- Preserve existing functionality unless explicitly requested otherwise.
- Avoid unnecessary refactoring.
- Do not create duplicate files or functions.
- Follow existing naming conventions.
- Keep changes minimal and focused.

## 6. Database Guidelines

- Follow the existing database schema and configuration.
- Do not modify database structures without explicit requirements.
- Avoid destructive queries or migrations without confirmation.
- Use Laravel migrations when schema changes are required.
- Never expose database credentials.

## 7. Frontend Guidelines

- Follow the existing Blade layout and component structure.
- Reuse existing CSS classes and JavaScript functionality.
- Maintain consistency across application pages.
- Ensure navigation links point to the correct application routes.
- Do not introduce unnecessary frontend frameworks.

## 8. AI Assistant Instructions

When assisting with development:

- Explain the purpose of proposed changes.
- Provide complete and usable code when requested.
- Mention which files need to be created or modified.
- Do not assume requirements that have not been provided.
- Ask for clarification when important implementation details are missing.
- Do not fabricate project configurations, API specifications, or business rules.
- Prefer simple, maintainable solutions over unnecessary complexity.

## 9. Security

- Never commit `.env` files or sensitive credentials.
- Validate and sanitize user input.
- Protect authenticated routes using appropriate middleware.
- Follow Laravel security best practices.
- Never expose sensitive information in logs or API responses.
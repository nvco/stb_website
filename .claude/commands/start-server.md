---
allowed-tools: Bash(hugo *:*)
description: Start Hugo development server with project settings
---

# Start Hugo Development Server

Start the Hugo development server for this project with the correct settings:

```bash
!hugo server -D --bind 0.0.0.0
```

This will:
- Start the Hugo server on http://localhost:1313/
- Include draft content (-D flag)
- Bind to all interfaces for network access
- Auto-reload on file changes
- Run in background for continuous development

Use `run_in_background=true` to keep the server running while you continue working.
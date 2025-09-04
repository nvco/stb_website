#!/bin/bash

# Install post-commit hook
cp scripts/post-commit-hook .git/hooks/post-commit
chmod +x .git/hooks/post-commit

echo "✅ Post-commit hook installed successfully!"
echo "Now commits will automatically update CHANGELOG.md"
# GitHub User Information Display

This is a web application that uses the GitHub API to display the specified GitHub user's avatar, bio, profile link, and the top 3 repositories sorted by star count. Each repository shows its name, description, star count, fork count, and primary language.

## Features

- Display the specified GitHub user's avatar, username, and bio.
- Provide a link to visit the GitHub profile.
- Display the top 3 repositories sorted by star count.
- Show each repository's name, description, star count, fork count, and primary language.

## Usage

1. Clone this repository to your local machine:

    ```bash
    git clone https://github.com/yourusername/github-user-info.git
    ```

2. Navigate to the project directory:

    ```bash
    cd github-user-info
    ```

3. Open the `index.html` file and edit the `githubUser` variable at the top to set the GitHub username you want to display:

    ```html
    <script>
        const githubUser = 'Gnayoah';  // Change this to the GitHub username you want to display
    </script>
    ```

4. Open the `index.html` file in a browser to see the result.

## File Structure

- `index.html` - The main HTML file containing the structure and logic of the application.
- `style.css` - The stylesheet file containing all the styles for the application.

## License

This project is licensed under the [GNU Affero General Public License v3.0 (AGPL-3.0)](LICENSE). For details, see the [LICENSE](LICENSE) file.

© 2024 Haoyang. All rights reserved.

## Contributing

Issues and pull requests are welcome. If you have any suggestions or find a bug, please let us know on GitHub.
